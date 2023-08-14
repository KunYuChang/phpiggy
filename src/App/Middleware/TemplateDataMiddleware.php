<?php

declare(strict_types=1);

namespace App\Middleware;

use Core\Contracts\MiddlewareInterface;

class TemplateDataMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        echo "Template data middleware";
    }
}
