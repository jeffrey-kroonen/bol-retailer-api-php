<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class CountryCode
{
    /**
     * Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}