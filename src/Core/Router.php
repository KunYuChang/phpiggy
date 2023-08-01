<?php

declare(strict_types=1);

namespace Core;

class Router
{
    private array $routes = [];

    public function add(string $path)
    {
        $this->routes[] = [
            'path' => $path
        ];
    }
}
