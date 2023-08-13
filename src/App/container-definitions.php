<?php

declare(strict_types=1);

use Core\TemplateEngine;
use App\Config\Paths;


return [
    TemplateEngine::class => fn () => new TemplateEngine(Paths::VIEW)
];
