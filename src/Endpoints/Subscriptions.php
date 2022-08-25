<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Endpoints;

use Enums\Subscriptions\ResourceTypes;
use JeffreyKroonen\BolRetailer\Generated\Model\KeySet;
use JeffreyKroonen\BolRetailer\Generated\Model\KeySetResponse;
use JeffreyKroonen\BolRetailer\Generated\Model\ProcessStatus;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\KeySetNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\KeySetResponseNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\ProcessStatusNormalizer;
use JeffreyKroonen\BolRetailer\Interfaces\SubscriptionsInterface;
use JeffreyKroonen\BolRetailer\Utilities\Helpers;

class Subscriptions extends BaseEndpoint implements SubscriptionsInterface
{
    use Helpers;

    protected string $endpoint = '/subscriptions';

    /**
     * Create push notification subscription
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
