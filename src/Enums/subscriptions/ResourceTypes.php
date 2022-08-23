<?php

namespace Enums\Subscriptions;

enum ResourceTypes: string
{
    case PROCESS_STATUS = 'PROCESS_STATUS';
    case SHIPMENT = 'SHIPMENT';
    case OFFER = 'OFFER';
}
