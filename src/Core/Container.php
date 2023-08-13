<?php

declare(strict_types=1);

namespace Core;

class Container
{
    private array $definitions = []; // 定義

    public function addDefinitions(array $newDefinitions)
    {
        dd($newDefinitions);
    }
}
