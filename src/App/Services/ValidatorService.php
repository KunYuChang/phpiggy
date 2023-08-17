<?php

declare(strict_types=1);

namespace App\Services;

use Core\Validator;

class ValidatorService
{
    private Validator $validator;

    public function __construct()
    {
        $this->validator = new Validator();
    }

    public function validateRegister(array $formData)
    {
        $this->validator->validate($formData);
    }
}
