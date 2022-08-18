<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Exceptions;

use Exception;

class EndpointNotSetException extends Exception
{
    public function __construct(?string $message = null)
    {
        parent::__construct(message: $message ?? 'The property [endpoint] must be set to the endpoint');
    }
}
