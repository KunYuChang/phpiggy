<?php

declare(strict_types=1);

namespace App\Middleware;

use Core\Contracts\MiddlewareInterface;
use Core\Exceptions\ValidationException;

class ValidationExceptionMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        $next();
    }
}
