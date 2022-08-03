<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OfferInsightsCountry
{
    /**
     * Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The total value of offer insight.
     *
     * @var float
     */
    protected $value;
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
    /**
     * The total value of offer insight.
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * The total value of offer insight.
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value) : self
    {
        $this->value = $value;
        return $this;
    }
}