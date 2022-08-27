<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Enums\Subscriptions;

enum StatusTypes: string
{
    case PENDING = 'PENDING';
    case SUCCESS = 'SUCCESS';
    case FAILURE = 'FAILURE';
    case TIMEOUT = 'TIMEOUT';
}
