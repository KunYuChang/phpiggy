<?php

declare(strict_types=1);

namespace Core;

class Router
{
    private array $routes = [];

    public function add(string $method, string $path)
    {
        $path = $this->normalizePath($path);
        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $path
        ];
    }

    public function normalizePath(string $path): string
    {
        $path = trim($path, '/');
        $path = "/{$path}/";
        return preg_replace('#/{2,}#', '/', $path); // 連續出現2個以上的/就替換成1個/
    }
}
