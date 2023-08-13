<?php

declare(strict_types=1);

namespace Core;

class Router
{
    private array $routes = [];

    public function add(string $method, string $path, array $controller)
    {
        $path = $this->normalizePath($path);

        // 這個陣列在 dispatch method 會使用
        $this->routes[] = [
            'method' => strtoupper($method),
            'path' => $path,
            'controller' => $controller
        ];
    }

    public function normalizePath(string $path): string
    {
        $path = trim($path, '/');
        $path = "/{$path}/";
        return preg_replace('#/{2,}#', '/', $path); // 連續出現2個以上的/就替換成1個/
    }

    // dispatch 意思是將某物發送到目的地
    public function dispatch(string $path, string $method, Container $container = null)
    {
        // algin router add method
        $path = $this->normalizePath($path);
        $method = strtoupper($method);

        foreach ($this->routes as $route) {
            // Guard Condition : return first
            if (
                !preg_match("#^{$route['path']}$#", $path) ||
                $route['method'] !== $method
            ) {
                continue;
            }

            [$class, $function] = $route['controller']; // Destructuring assignment
            $controllerInstance = $container ? $container->resolve($class) : new $class;
            $controllerInstance->{$function}(); // 將路由發送到控制器
        }
    }
}
