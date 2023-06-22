<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Endpoints;

use JeffreyKroonen\BolRetailer\Generated\Model\KeySetResponse;
use JeffreyKroonen\BolRetailer\Generated\Model\ProcessStatus;
use JeffreyKroonen\BolRetailer\Generated\Model\SubscriptionResponse;
use JeffreyKroonen\BolRetailer\Generated\Model\SubscriptionsResponse;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\KeySetNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\KeySetResponseNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\LinkNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\ProcessStatusNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\SubscriptionResponseNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\SubscriptionsResponseNormalizer;
use JeffreyKroonen\BolRetailer\Interfaces\SubscriptionsInterface;
use JeffreyKroonen\BolRetailer\Utilities\Helpers;
use Symfony\Component\Serializer\Serializer;

class Subscriptions extends BaseEndpoint implements SubscriptionsInterface
{
    use Helpers;

    protected string $endpoint = '/subscriptions';

    /**
     * Get push notification subscriptions.
     *
     * @return array<int, SubscriptionResponse>
     */
    public function subscriptions(): array
    {
        $this->checkAuthentication();

        $response = $this->http->get($this->getRetailerEndpointUrl());
        $subscriptionsData = $this->http->jsonDecodeBody($response);

        $subscriptionsResponse = $this->serializer()->denormalize(
            data: $subscriptionsData,
            type: SubscriptionsResponse::class
        );

        return $subscriptionsResponse->getSubscriptions();
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

        return $this->serializer()->denormalize(
            data: $subscriptionData,
            type: SubscriptionResponse::class
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
        $processStatusData['entityId'] = '-1';

        return $this->serializer()->denormalize(
            data: $processStatusData,
            type: ProcessStatus::class
        );
    }

    public function delete(string $id): ProcessStatus
    {
        $this->checkAuthentication();

        $response = $this->http->delete($this->getRetailerEndpointUrl("/{$id}"));
        $processStatusData = $this->http->jsonDecodeBody($response);

        return $this->serializer()->denormalize(
            data: $processStatusData,
            type: ProcessStatus::class
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

        $signatureKeysResponse = $this->serializer()->denormalize(
            data: $signatureKeysData,
            type: KeySetResponse::class,
        );

        return $signatureKeysResponse->getSignatureKeys();
    }

    /**
     * Trigger sending of a test push notification for subscription.
     *
     * @return void
     */
    public function triggerPushNotification(): ProcessStatus
    {
        $this->checkAuthentication();

        $response = $this->http->post($this->getRetailerEndpointUrl('/test/54321'));
        $processStatusData = $this->http->jsonDecodeBody($response);

        return $this->serializer()->denormalize(
            data: $processStatusData,
            type: ProcessStatus::class
        );
    }

    private function serializer(): Serializer
    {
        return new Serializer(
            normalizers: [
                new SubscriptionResponseNormalizer(),
                new SubscriptionsResponseNormalizer(),
                new ProcessStatusNormalizer(),
                new KeySetResponseNormalizer(),
                new KeySetNormalizer(),
                new LinkNormalizer(),
            ]
        );
    }
}
