<?php

// bootstrap.php 負責加載和配置應用程式所需的文件
// public/index 負責啟動應用程式

declare(strict_types=1);

include __DIR__ . "/../Core/App.php";

use Core\App;

$app = new App();

return $app;