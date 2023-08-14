<?php

declare(strict_types=1);

namespace App\Config;

use Core\App;
use App\Middleware\TemplateDataMiddleware;
use Core\TemplateEngine;

function registerMiddleware(App $app)
{
    $app->addMiddleware(TemplateDataMiddleware::class);
}
