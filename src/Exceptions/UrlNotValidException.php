<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Exceptions;

use Exception;

class UrlNotValidException extends Exception
{
    public function __construct(string $url)
    {
        parent::__construct(
            message: "The given URL \"{$url}\" is not valid"
        );
    }
}
