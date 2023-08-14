<?php

declare(strict_types=1);

namespace App\Controllers;

use Core\TemplateEngine;

class AuthController
{
    public function __construct(
        private TemplateEngine $view,
    ) {
    }

    public function registerView()
    {
        echo $this->view->render("register.php");
    }
}
