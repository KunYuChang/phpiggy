<?php

declare(strict_types=1);

namespace App\Config;

use Core\App;
use App\Controllers\{HomeController, AboutController, AuthController};

function registerRoutes(App $app)
{
    // add router (contain the name of the class and method in the array)
    // PHP 8 可以用HomeController::class取代'App\Controllers\HomeController'
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/about', [AboutController::class, 'about']);
    $app->get('/register', [AuthController::class, 'registerView']);
}
