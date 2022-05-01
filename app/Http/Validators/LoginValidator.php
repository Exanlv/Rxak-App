<?php

namespace Rxak\App\Http\Validators;

use Rxak\Framework\Validation\Validator;

class LoginValidator extends Validator
{
    public function authorized(): bool
    {
        return true;
    }

    public function validate(): void
    {
        $this->minLength('username', 5);
        $this->minLength('password', 3);
    }
}