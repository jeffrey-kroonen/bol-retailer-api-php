<?php

namespace JeffreyKroonen\BolRetailer\Clients;

abstract class BaseClient
{
    private const BASE_URL = 'https://api.bol.com';

    private const RETAILER_API_ENDPOINT = '/retailer';

    /**
     * @var string
     */
    private string $bolClientId;

    /**
     * @var string
     */
    private string $bolClientSecret;

    /**
     * @var string
     */
    private string $accessToken;

    /**
     * The number of seconds when we have to get a new access token.
     *
     * @var integer
     */
    private int $expiresIn;

    /**
     * Create a new Client instance.
     *
     * @param string|null $bolClientId
     * @param string|null $bolClientSecret
     */
    public function __construct(?string $bolClientId = null, ?string $bolClientSecret = null)
    {
        if (!is_null($bolClientId)) {
            $this->setBolClientId($bolClientId);
        }

        if (!is_null($bolClientId)) {
            $this->setBolClientSecret($bolClientSecret);
        }
    }

    /**
     * Mutator for the bolClientId property
     *
     * @param string $bolClientId
     * @return self
     */
    public function setBolClientId(string $bolClientId): self
    {
        $this->bolClientId = $bolClientId;

        return $this;
    }

    /**
     * Mutator for the bolClientSecret property
     *
     * @param string $bolClientId
     * @return self
     */
    public function setBolClientSecret(string $bolClientSecret): self
    {
        $this->bolClientSecret = $bolClientSecret;

        return $this;
    }

    private function authenticate(): self
    {
        // @todo Make a HTTP POST request to authenticate at Bol.com.

        return $this;
    }
}
