<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Enums\Subscriptions;

enum EventTypes: string
{
    case CREATE_SUBSCRIPTION = 'CREATE_SUBSCRIPTION';
    case UPDATE_SUBSCRIPTION = 'UPDATE_SUBSCRIPTION';
    case DELETE_SUBSCRIPTION = 'DELETE_SUBSCRIPTION';
    case SEND_SUBSCRIPTION_TST_MSG = 'SEND_SUBSCRIPTION_TST_MSG';
}
