<?php

// bootstrap.php 負責加載和配置應用程式所需的文件
// public/index 負責啟動應用程式

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Core\App;

$app = new App();

// add router (contain the name of the class and method in the array)
$app->get('/', ['App\Controllers\HomeController',]); // root url

return $app;
