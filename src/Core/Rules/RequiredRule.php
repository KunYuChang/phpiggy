<?php

declare(strict_types=1);

namespace Core\Rules;

use Core\Contracts\RuleInterface;

class RequiredRule implements RuleInterface
{
    public function validate(array $data, string $field, array $params): bool
    {
        return !empty($data[$field]);
    }

    public function getMessage(array $data, string $field, array $params): string
    {
        return "This filed is required";
    }
}
