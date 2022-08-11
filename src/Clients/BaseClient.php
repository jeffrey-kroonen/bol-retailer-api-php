<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Clients;

abstract class BaseClient
{
    private const BASE_URL = 'https://api.bol.com';

    private const RETAILER_API_ENDPOINT = '/retailer';

    /**
     * @var HttpClient
     */
    protected HttpClient $httpClient;

    public function __construct()
    {
        $this->setHttpClient(new HttpClient());
    }

    public function getRetailerEndpointUrl(): string
    {
        return self::BASE_URL . self::RETAILER_API_ENDPOINT;
    }

    /**
     * Accessor for the httpClient property.
     *
     * @return HttpClient
     */
    public function getHttpClient(): HttpClient
    {
        return $this->httpClient;
    }

    /**
     * Mutator for the httpClient property.
     *
     * @param HttpClient $httpClient The Guzzle HTTP client wrapper used for API calls.
     * @return self
     */
    public function setHttpClient(HttpClient $httpClient): self
    {
        $this->httpClient = $httpClient;

        return $this;
    }
}
