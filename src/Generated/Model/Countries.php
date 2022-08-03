<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Countries
{
    /**
     * Countries in which this offer is currently on sale in the webshop, in ISO-3166-1 format.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Minimum number of estimated sales expectations on the bol.com platform.
     *
     * @var float
     */
    protected $minimum;
    /**
     * Maximum number of estimated sales expectations on the bol.com platform.
     *
     * @var float
     */
    protected $maximum;
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
     * Minimum number of estimated sales expectations on the bol.com platform.
     *
     * @return float
     */
    public function getMinimum() : float
    {
        return $this->minimum;
    }
    /**
     * Minimum number of estimated sales expectations on the bol.com platform.
     *
     * @param float $minimum
     *
     * @return self
     */
    public function setMinimum(float $minimum) : self
    {
        $this->minimum = $minimum;
        return $this;
    }
    /**
     * Maximum number of estimated sales expectations on the bol.com platform.
     *
     * @return float
     */
    public function getMaximum() : float
    {
        return $this->maximum;
    }
    /**
     * Maximum number of estimated sales expectations on the bol.com platform.
     *
     * @param float $maximum
     *
     * @return self
     */
    public function setMaximum(float $maximum) : self
    {
        $this->maximum = $maximum;
        return $this;
    }
}