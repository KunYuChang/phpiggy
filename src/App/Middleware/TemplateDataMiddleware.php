<?php

declare(strict_types=1);

namespace App\Middleware;

use Core\Contracts\MiddlewareInterface;
use Core\TemplateEngine;

class TemplateDataMiddleware implements MiddlewareInterface
{
    public function __construct(
        private TemplateEngine $view
    ) {
    }

    public function process(callable $next)
    {
        echo "Template data middleware";
    }
}
