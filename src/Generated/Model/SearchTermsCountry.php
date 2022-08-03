<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class SearchTermsCountry
{
    /**
     * Countries in which this offer is currently on sale in the webshop in ISO-3166-1 format.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The number of customer visits on the search page.
     *
     * @var int
     */
    protected $value;
    /**
     * Countries in which this offer is currently on sale in the webshop in ISO-3166-1 format.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * Countries in which this offer is currently on sale in the webshop in ISO-3166-1 format.
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
     * The number of customer visits on the search page.
     *
     * @return int
     */
    public function getValue() : int
    {
        return $this->value;
    }
    /**
     * The number of customer visits on the search page.
     *
     * @param int $value
     *
     * @return self
     */
    public function setValue(int $value) : self
    {
        $this->value = $value;
        return $this;
    }
}