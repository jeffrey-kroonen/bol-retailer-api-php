<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Exceptions;

use Exception;

class AuthNotSetException extends Exception
{
    public function __construct(?string $message = null)
    {
        parent::__construct(message: $message ?? 'The property [auth] must be set to use endpoints');
    }
}
