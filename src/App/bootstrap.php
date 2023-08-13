<?php

// bootstrap.php 負責加載和配置應用程式所需的文件
// public/index 負責啟動應用程式

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Core\App;
use App\Config\Paths;
use function App\Config\registerRoutes;

$app = new App(Paths::APP . "container-definitions.php");

registerRoutes($app);

return $app;
