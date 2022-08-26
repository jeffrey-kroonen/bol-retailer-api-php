<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Interfaces;

use Enums\Subscriptions\ResourceTypes;
use JeffreyKroonen\BolRetailer\Generated\Model\ProcessStatus;
use JeffreyKroonen\BolRetailer\Generated\Model\SubscriptionResponse;

interface SubscriptionsInterface
{
    public function subscriptions(): array;
    public function subscriptionById(string $id): SubscriptionResponse;
    public function subscribe(array $resourceTypes, string $url);
    public function delete(string $id): ProcessStatus;
    public function signatureKeys(): array;
}
