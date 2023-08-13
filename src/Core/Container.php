<?php

declare(strict_types=1);

namespace Core;

use ReflectionClass;

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

        dd($reflectionClass);
    }
}
