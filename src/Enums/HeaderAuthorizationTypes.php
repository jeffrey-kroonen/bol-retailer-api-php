<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Enums;

enum HeaderAuthorizationTypes: string
{
    case BASIC = 'Basic';
    case BEARER = 'Bearer';
}
