<?php

// index.php 負責啟動 application

$app = include __DIR__ . "/../src/App/bootstrap.php";
$app->run();