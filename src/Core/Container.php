<?php

declare(strict_types=1);

namespace Core;

use ReflectionClass;
use Core\Exceptions\ContainerException;

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

        // If the method doesn't exist, we dont have to bother checking for dependencies.
        if (!$constructor) {
            return new $className;
        }

        dd($reflectionClass);
    }
}
