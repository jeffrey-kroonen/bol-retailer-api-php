<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Enums\Subscriptions;

enum ResourceTypes: string
{
    case PROCESS_STATUS = 'PROCESS_STATUS';
    case SHIPMENT = 'SHIPMENT';
    case OFFER = 'OFFER';
}
