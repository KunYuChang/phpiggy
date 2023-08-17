<?php

declare(strict_types=1);

namespace Core;

use Core\Contracts\RuleInterface;

class Validator
{
    private array $rules = [];

    public function get(string $alias, RuleInterface $rule)
    {
        $this->rules[$alias] = $rule;
    }

    public function validate(array $formData)
    {
        dd($formData);
    }
}
