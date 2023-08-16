<?php

declare(strict_types=1);

use Core\TemplateEngine;
use App\Config\Paths;
use App\Services\ValidatorService;

// The key acts as an ID for the dependency.
return [
    TemplateEngine::class => fn () => new TemplateEngine(Paths::VIEW),
    ValidatorService::class => fn () => new ValidatorService()
];
