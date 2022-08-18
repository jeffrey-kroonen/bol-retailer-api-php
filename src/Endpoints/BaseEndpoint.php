<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Endpoints;

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

    public function __construct(?Auth $auth)
    {
        if (isset($auth)) {
            $this->setAuth($auth);

            if (! isset($this->http)) {
                $this->setHttp(new Http());
            }
        }
    }

    /**
     * The accessor for the endpoint url.
     *
     * @return string
     */
    public function getRetailerEndpointUrl(): string
    {
        if (! isset($this->endpoint)) {
            throw new EndpointNotSetException();
        }

        return self::BASE_URL . self::RETAILER_API_ENDPOINT . $this->endpoint;
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
