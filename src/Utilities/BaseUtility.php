<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Utilities;

abstract class BaseUtility
{
    /**
     * @var Http
     */
    protected Http $http;

    public function __construct()
    {
        $this->setHttp(new Http());
    }

    /**
     * Accessor for the http property.
     *
     * @return Http
     */
    public function getHttp(): Http
    {
        return $this->http;
    }

    /**
     * Mutator for the http property.
     *
     * @param Http $http The Guzzle HTTP client wrapper used for API calls.
     * @return self
     */
    public function setHttp(Http $http): self
    {
        $this->http = $http;

        return $this;
    }
}
