<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Endpoints;

use JeffreyKroonen\BolRetailer\Enums\ApiTypes;
use JeffreyKroonen\BolRetailer\Enums\HeaderAuthorizationTypes;
use JeffreyKroonen\BolRetailer\Exceptions\AuthNotSetException;
use JeffreyKroonen\BolRetailer\Exceptions\EndpointNotSetException;
use JeffreyKroonen\BolRetailer\Exceptions\UnauthorizedException;
use JeffreyKroonen\BolRetailer\Utilities\Auth;
use JeffreyKroonen\BolRetailer\Utilities\Http;

abstract class BaseEndpoint
{
    private const BASE_URL = 'https://api.bol.com';
    private const RETAILER_API_ENDPOINT = '/retailer';
    private const RETAILER_DEMO_API_ENDPOINT = '/retailer-demo';
    private const SHARED_API_ENDPOINT = '/shared';

    /**
     * Determines if the demo environment of Bol.com Retailer API should be used.
     *
     * @var boolean
     */
    private readonly bool $demoModeEnabled;

    /**
     * @var string
     */
    protected string $api;

    /**
     * @var string
     */
    protected string $endpoint;

    /**
     * @var Auth
     */
    protected Auth $auth;

    /**
     * @var Http
     */
    protected Http $http;

    /**
     * @var string
     */
    protected string $credentials;

    public function __construct(?Auth $auth = null)
    {
        if ($auth) {
            $this->setAuth($auth);

            if (! isset($this->http)) {
                $this->setHttp(new Http());
            }
        }
    }

    public function enableDemoMode(): self
    {
        $this->demoModeEnabled = true;

        return $this;
    }

    /**
     * The accessor for the endpoint url.
     *
     * @return string
     */
    public function getRetailerEndpointUrl(string $subPath = ''): string
    {
        if (! isset($this->endpoint)) {
            throw new EndpointNotSetException();
        }

        if (! isset($this->api)) {
            $this->api = ApiTypes::RETAILER->value;
        }

        $baseEndpoint = match ($this->api) {
            ApiTypes::RETAILER->value => isset($this->demoModeEnabled) && $this->demoModeEnabled ? self::RETAILER_DEMO_API_ENDPOINT: self::RETAILER_API_ENDPOINT,
            ApiTypes::SHARED->value => self::SHARED_API_ENDPOINT
        };

        return self::BASE_URL
            . $baseEndpoint
            . $this->endpoint
            . $subPath;
    }

    /**
     * Mutator for the auth property.
     *
     * @param Auth $auth
     * @return self
     */
    public function setAuth(Auth $auth): self
    {
        $this->auth = $auth;

        return $this;
    }

    /**
     * Mutator for the http property.
     *
     * @param Http $http
     * @return self
     */
    public function setHttp(Http $http): self
    {
        $this->http = $http;

        if (empty($this->http->getHeaders())) {
            $this->http->setHeaders([
                'Accept' => Http::HEADER_APPLICATION_CONTENT_TYPE_JSON,
                'Content-Type' => Http::HEADER_APPLICATION_CONTENT_TYPE_JSON,
                'Authorization' => sprintf('%s %s', HeaderAuthorizationTypes::BEARER->value, $this->auth->getAccessToken()),
            ]);
        }

        return $this;
    }

    /**
     * Mutator for the credentials property.
     *
     * @param string $credentials
     * @return self
     */
    public function setCredentials(string $credentials): self
    {
        $this->credentials = $credentials;

        return $this;
    }

    /**
     * Check if the app is still authenticated.
     *
     * @return void
     * @throws AuthNotSetException
     * @throws UnauthorizedException
     */
    public function checkAuthentication(): void
    {
        if (! isset($this->auth)) {
            throw new AuthNotSetException();
        }

        if (! $this->auth->isAuthenticated()) {
            throw new UnauthorizedException('The access token is expired or not set, please authenticate first');
        }
    }
}
