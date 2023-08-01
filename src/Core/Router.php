<?php

declare(strict_types=1);

namespace Core;

class Router
{
    private array $routes = [];

    public function add(string $method, string $path)
    {
        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $path
        ];
    }
}
