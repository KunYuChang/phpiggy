<?php

// 設計為管理框架所有的工具。

declare(strict_types=1);

namespace Core;

class App
{
    private Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        echo "Application is running";
    }

    // for Router : 如果要從私有屬性的實例中調用方法，我們就必須另外定義一個方法來使用。
    public function add(string $path)
    {
        $this->router->add($path);
    }
}
