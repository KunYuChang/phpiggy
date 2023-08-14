<?php

declare(strict_types=1);

namespace Core;

use ReflectionClass, ReflectionNamedType;
use Core\Exceptions\ContainerException;
use ReflectionType;

class Container
{
    // 定義存儲類別工廠函式的陣列
    private array $definitions = [];

    // 定義已解析過的物件實例的陣列（用於單例模式）
    private array $instances = [];

    public function addDefinitions(array $newDefinitions)
    {
        // The spread operator is slightly faster than the array merge function.
        $this->definitions = [...$this->definitions, ...$newDefinitions];
    }

    public function resolve(string $className)
    {
        $reflectionClass = new ReflectionClass($className);

        if (!$reflectionClass->isInstantiable()) {
            throw new ContainerException("Class {$className} is not instantiable");
        }

        $constructor = $reflectionClass->getConstructor();

        // (1) If the method doesn't exist, we dont have to bother checking for dependencies.
        if (!$constructor) {
            return new $className;
        }

        // return array of instances of the reflection
        $params = $constructor->getParameters();

        // (2) if params zero, this means the array is empty
        if (count($params) === 0) {
            return new $className;
        }

        // The dependencies variable is going to store the instances or dependencies required by our controller.
        $dependencies = [];

        foreach ($params as $param) {
            $name = $param->getName();
            $type = $param->getType();

            // we'll only accept classes as type hints for parameters.
            // if a developer forgets to add a type hint, we won't be able to instantiate a class from the container.
            if (!$type) {
                throw new ContainerException("Failed to resolve class {$className} because param {$name} is missing a type hint.");
            }

            // this condition checks if the variable is not an instance of the reflection named type.
            if (!$type instanceof ReflectionNamedType || $type->isBuiltin()) {
                throw new ContainerException("Failed to resolve class {$className} because invalid param name.");
            }

            $dependencies[] = $this->get($type->getName());
        }

        // 1. Instantiate the class.
        // 2. Dependencies required by the constructor are also instantiated and passed to the constructor.
        return $reflectionClass->newInstanceArgs($dependencies);
    }

    public function get(string $id)
    {
        if (!array_key_exists($id, $this->definitions)) {
            throw new ContainerException("Class {$id} does not exist in container.");
        }

        // 檢查是否已經存在該 ID 的物件實例
        if (array_key_exists($id, $this->instances)) {
            // 如果已經存在，直接返回之前已創建的物件實例
            return $this->instances[$id];
        }

        // 從定義中取得工廠函式，並呼叫以獲取實際的物件實例
        $factory = $this->definitions[$id];
        $dependency = $factory();

        // 將解析的物件實例存入已解析陣列，以供下次判斷是否曾經實例過
        $this->instances[$id] = $dependency;

        return $dependency;
    }
}
