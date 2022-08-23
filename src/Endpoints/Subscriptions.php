<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Endpoints;

use Enums\Subscriptions\ResourceTypes;
use JeffreyKroonen\BolRetailer\Generated\Model\SubscriptionResponse;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\SubscriptionResponseNormalizer;
use JeffreyKroonen\BolRetailer\Interfaces\SubscriptionsInterface;
use JeffreyKroonen\BolRetailer\Utilities\Helpers;

class Subscriptions extends BaseEndpoint implements SubscriptionsInterface
{
    use Helpers;

    protected string $endpoint = '/subscriptions';

    public function subscribe(array $resourceTypes, string $url): SubscriptionResponse
    {
        $this->checkAuthentication();

        $response = $this->http->post($this->getRetailerEndpointUrl(), [
            'resources' => $this->unpack(enums: $resourceTypes),
            'url' => $this->validatedUrl($url),
        ]);
        $subscriptionResponseData = $this->http->jsonDecodeBody($response);

        return (new SubscriptionResponseNormalizer())->denormalize(
            data: $subscriptionResponseData,
            class: SubscriptionResponse::class
        );
    }
}
