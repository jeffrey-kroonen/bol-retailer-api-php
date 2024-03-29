<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OffersCountryCode
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format.
     *
     * @var string
     */
    protected $countryCode;

    /**
     * Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format.
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }
}
