<?php

declare(strict_types=1);

namespace Core;

use Core\Contracts\RuleInterface;

class Validator
{
    private array $rules = [];

    public function add(string $alias, RuleInterface $rule)
    {
        $this->rules[$alias] = $rule;
    }

    public function validate(array $formData, array $fields)
    {
        $errors = [];

        // From Services
        foreach ($fields as $fieldName => $rules) {
            foreach ($rules as $rule) {
                // From Rules
                $ruleValidator = $this->rules[$rule];

                if ($ruleValidator->validate($formData, $fieldName, [])) {
                    continue;
                }

                $errors[$fieldName][] = $ruleValidator->getMessage($formData, $fieldName, []);
            }
        }

        if (count($errors)) {
            dd($errors);
        }
    }
}
