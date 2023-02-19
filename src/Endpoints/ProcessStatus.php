<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Endpoints;

use JeffreyKroonen\BolRetailer\Enums\ApiTypes;
use JeffreyKroonen\BolRetailer\Generated\Model\ProcessStatus as BolDotComProcessStatus;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\LinkNormalizer;
use JeffreyKroonen\BolRetailer\Generated\Normalizer\ProcessStatusNormalizer;
use JeffreyKroonen\BolRetailer\Interfaces\ProcessStatusesInterface;
use JeffreyKroonen\BolRetailer\Utilities\Auth;
use Symfony\Component\Serializer\Serializer;

class ProcessStatus extends BaseEndpoint implements ProcessStatusesInterface
{
    protected string $endpoint = '/process-status';

    public function __construct(?Auth $auth = null)
    {
        parent::__construct($auth);

        $this->api = ApiTypes::SHARED->value;
    }

    /**
     * Get a process status by order id.
     *
     * @param string $id The id of the process status to get.
     * @return BolDotComProcessStatus
     */
    public function processStatusById(string $id): BolDotComProcessStatus
    {
        $this->checkAuthentication();

        $response = $this->http->get($this->getRetailerEndpointUrl("/{$id}"));
        $processStatusData = $this->http->jsonDecodeBody($response);

        return $this->serializer()->denormalize(
            data: $processStatusData,
            type: BolDotComProcessStatus::class
        );
    }

    private function serializer(): Serializer
    {
        return new Serializer(
            normalizers: [
                new ProcessStatusNormalizer(),
                new LinkNormalizer(),
            ]
        );
    }
}
