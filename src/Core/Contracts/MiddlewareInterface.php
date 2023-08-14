<?php

declare(strict_types=1);

namespace Core\Contracts;

interface MiddlewareInterface
{
    // 1. the purpose of the process method is to process the request
    // 2. each middleware is going to have the responsibility of running the next middleware
    //    in some cases you may want to redirect the user during middleware.
    //    for example, you can create middleware for guarding routes from unauthorized users.
    public function process(callable $next);
}
