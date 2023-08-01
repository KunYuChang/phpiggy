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
}
