<?php

// 設計為管理框架所有的工具。

declare(strict_types=1);

namespace Core;

class App
{
    private Router $router;
    private Container $container;

    public function __construct(string $containerDefinitionsPath = null)
    {
        $this->router = new Router();
        $this->container = new Container();

        // 容器定義檔
        if ($containerDefinitionsPath) {
            $containerDefinitions = include $containerDefinitionsPath;
            $this->container->addDefinitions($containerDefinitions);
        }
    }

    // Request -> Router -> Controller
    public function run()
    {
        // 只取得URL即可
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        $this->router->dispatch($path, $method, $this->container);
    }

    // for Router : 如果要從私有屬性的實例中調用方法，我們就必須另外定義一個方法來使用。
    public function get(string $path, array $controller)
    {
        // 依據 $path 對應到 $controller
        $this->router->add('GET', $path, $controller);
    }

    public function addMiddleware(string $middleware)
    {
        $this->router->addMiddleware($middleware);
    }
}
