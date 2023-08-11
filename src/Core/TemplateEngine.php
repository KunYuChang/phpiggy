<?php

declare(strict_types=1);

namespace Core;

class TemplateEngine
{
    public function __construct(
        private string $basePath
    ) {
    }
}
