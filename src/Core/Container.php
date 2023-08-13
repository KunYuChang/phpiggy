<?php

declare(strict_types=1);

namespace Core;

class Container
{
    private array $definitions = []; // 定義

    public function addDefinitions(array $newDefinitions)
    {
        // The spread operator is slightly faster than the array merge function.
        $this->definitions = [...$this->definitions, ...$newDefinitions];
        dd($this->definitions);
    }
}
