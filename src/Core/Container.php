<?php

declare(strict_types=1);

namespace Core;

use ReflectionClass, ReflectionNamedType;
use Core\Exceptions\ContainerException;
use ReflectionType;

class Container
{
    private array $definitions = []; // 定義

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

        dd($dependencies);
    }

    public function get(string $id)
    {
        if (!array_key_exists($id, $this->definitions)) {
            throw new ContainerException("Class {$id} does not exist in container.");
        }

        $factory = $this->definitions[$id];
        $dependency = $factory();

        return $dependency;
    }
}
