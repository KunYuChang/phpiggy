<?php

declare(strict_types=1);

use Core\TemplateEngine;
use App\Config\Paths;

// The key acts as an ID for the dependency.
return [
    TemplateEngine::class => fn () => new TemplateEngine(Paths::VIEW)
];
