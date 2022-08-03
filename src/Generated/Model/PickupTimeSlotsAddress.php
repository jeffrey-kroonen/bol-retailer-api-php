<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class PickupTimeSlotsAddress
{
    /**
     * The street name of the pickup address.
     *
     * @var string
     */
    protected $streetName;
    /**
     * The house number of the pickup address.
     *
     * @var string
     */
    protected $houseNumber;
    /**
     * The extension of the house number.
     *
     * @var string
     */
    protected $houseNumberExtension;
    /**
     * The zip code in '1234AB' format for NL and '0000' for BE addresses.
     *
     * @var string
     */
    protected $zipCode;
    /**
     * The city of the pickup address.
     *
     * @var string
     */
    protected $city;
    /**
     * The ISO 3166-2 country code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The street name of the pickup address.
     *
     * @return string
     */
    public function getStreetName() : string
    {
        return $this->streetName;
    }
    /**
     * The street name of the pickup address.
     *
     * @param string $streetName
     *
     * @return self
     */
    public function setStreetName(string $streetName) : self
    {
        $this->streetName = $streetName;
        return $this;
    }
    /**
     * The house number of the pickup address.
     *
     * @return string
     */
    public function getHouseNumber() : string
    {
        return $this->houseNumber;
    }
    /**
     * The house number of the pickup address.
     *
     * @param string $houseNumber
     *
     * @return self
     */
    public function setHouseNumber(string $houseNumber) : self
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }
    /**
     * The extension of the house number.
     *
     * @return string
     */
    public function getHouseNumberExtension() : string
    {
        return $this->houseNumberExtension;
    }
    /**
     * The extension of the house number.
     *
     * @param string $houseNumberExtension
     *
     * @return self
     */
    public function setHouseNumberExtension(string $houseNumberExtension) : self
    {
        $this->houseNumberExtension = $houseNumberExtension;
        return $this;
    }
    /**
     * The zip code in '1234AB' format for NL and '0000' for BE addresses.
     *
     * @return string
     */
    public function getZipCode() : string
    {
        return $this->zipCode;
    }
    /**
     * The zip code in '1234AB' format for NL and '0000' for BE addresses.
     *
     * @param string $zipCode
     *
     * @return self
     */
    public function setZipCode(string $zipCode) : self
    {
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * The city of the pickup address.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * The city of the pickup address.
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * The ISO 3166-2 country code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The ISO 3166-2 country code.
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