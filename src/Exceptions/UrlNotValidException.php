<?php

namespace Exceptions;

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
