<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Endpoints;

use Enums\Subscriptions\ResourceTypes;
use JeffreyKroonen\BolRetailer\Generated\Model\KeySet;
use JeffreyKroonen\BolRetailer\Generated\Model\KeySetResponse;
use JeffreyKroonen\BolRetailer\Generated\Model\ProcessStatus;
use JeffreyKroonen\BolRetailer\Generated\Model\SubscriptionResponse;
use JeffreyKroonen\BolRetailer\Generated\Model\SubscriptionsResponse;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\KeySetNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\KeySetResponseNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\ProcessStatusNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\SubscriptionResponseNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\SubscriptionsResponseNormalizer;
use JeffreyKroonen\BolRetailer\Interfaces\SubscriptionsInterface;
use JeffreyKroonen\BolRetailer\Utilities\Helpers;

class Subscriptions extends BaseEndpoint implements SubscriptionsInterface
{
    use Helpers;

    protected string $endpoint = '/subscriptions';

    /**
     * Get push notification subscriptions.
     *
     * @return array
     */
    public function subscriptions(): array
    {
        $this->checkAuthentication();

        $response = $this->http->get($this->getRetailerEndpointUrl());
        $subscriptionsData = $this->http->jsonDecodeBody($response);

        $subscriptionsResponse = (new SubscriptionsResponseNormalizer())-> denormalize(
            data: $subscriptionsData,
            class: SubscriptionsResponse::class
        );

        $subscriptions = [];
        foreach ($subscriptionsResponse->getSubscriptions() as $subscription) {
            $subscriptions[] = (new SubscriptionResponseNormalizer)->denormalize(
                data: $subscription,
                class: SubscriptionResponse::class
            );
        }

        return $subscriptions;
    }

    /**
     * Get push notification subscription by id
     *
     * @param string $id
     * @return SubscriptionResponse
     */
    public function subscriptionById(string $id): SubscriptionResponse
    {
        $this->checkAuthentication();

        $response = $this->http->get($this->getRetailerEndpointUrl("/{$id}"));
        $subscriptionData = $this->http->jsonDecodeBody($response);

        return (new SubscriptionResponseNormalizer())->denormalize(
            data: $subscriptionData,
            class: SubscriptionResponse::class
        );
    }

    /**
     * Create push notification subscription.
     *
     * @param array $resourceTypes
     * @param string $url
     * @return ProcessStatus
     */
    public function subscribe(array $resourceTypes, string $url): ProcessStatus
    {
        $this->checkAuthentication();

        $response = $this->http->post($this->getRetailerEndpointUrl(), [
            'resources' => $this->unpack(enums: $resourceTypes),
            'url' => $this->validatedUrl($url),
        ]);
        $processStatusData = $this->http->jsonDecodeBody($response);
        // The entityId will not be set when creating subscription and ProcessStatus is returned.
        $processStatusData['entityId'] = -1;

        return (new ProcessStatusNormalizer())->denormalize(
            data: $processStatusData,
            class: ProcessStatus::class
        );
    }

    public function delete(string $id): ProcessStatus
    {
        $this->checkAuthentication();

        $response = $this->http->delete($this->getRetailerEndpointUrl("/{$id}"));
        $processStatusData = $this->http->jsonDecodeBody($response);

        return (new ProcessStatusNormalizer())->denormalize(
            data: $processStatusData,
            class: ProcessStatus::class
        );
    }

    /**
     * Retrieve public keys for push notification signature validation.
     *
     * @return array
     */
    public function signatureKeys(): array
    {
        $this->checkAuthentication();

        $response = $this->http->get($this->getRetailerEndpointUrl('/signature-keys'));
        $signatureKeysData = $this->http->jsonDecodeBody($response);

        $signatureKeysResponse = (new KeySetResponseNormalizer())->denormalize(
            data: $signatureKeysData,
            class: KeySetResponse::class,
        );

        $signatureKeys = [];
        foreach ($signatureKeysResponse->getSignatureKeys() as $signatureKey) {
            $signatureKeys[] = (new KeySetNormalizer())->denormalize(
                data: $signatureKey,
                class: KeySet::class,
            );
        }

        return $signatureKeys;
    }
}
