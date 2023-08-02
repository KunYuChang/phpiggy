<?php

// index.php 負責啟動 application

include __DIR__ . "/../src/App/functions.php";

$app = include __DIR__ . "/../src/App/bootstrap.php";
$app->run();
