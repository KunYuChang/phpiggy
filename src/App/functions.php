<?php

declare(strict_types=1);

// dump and die
function dd(mixed $value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    exit;
}

// escape
function e(mixed $value): string
{
    return htmlspecialchars((string) $value);
}

function redirect(string $path)
{
    header("Location: {$path}");
    http_response_code(302);
    exit;
}
