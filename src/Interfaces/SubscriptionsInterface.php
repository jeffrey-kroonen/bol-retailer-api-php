<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Interfaces;

use Enums\Subscriptions\ResourceTypes;

interface SubscriptionsInterface
{
    public function subscriptions(): array;
    public function subscribe(array $resourceTypes, string $url);
    public function signatureKeys(): array;
}
