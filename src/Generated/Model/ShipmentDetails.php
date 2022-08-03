<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ShipmentDetails
{
    /**
     * The name of Pick Up Point location this order needs to be shipped to.
     *
     * @var string
     */
    protected $pickupPointName;
    /**
     * The salutation of the customer.
     *
     * @var string
     */
    protected $salutation;
    /**
     * The first name of the customer.
     *
     * @var string
     */
    protected $firstName;
    /**
     * The surname of the customer.
     *
     * @var string
     */
    protected $surname;
    /**
     * The street name.
     *
     * @var string
     */
    protected $streetName;
    /**
     * The house number.
     *
     * @var string
     */
    protected $houseNumber;
    /**
     * The extension on the house number.
     *
     * @var string
     */
    protected $houseNumberExtension;
    /**
     * Additional information related to the address that helps in delivering the package.
     *
     * @var string
     */
    protected $extraAddressInformation;
    /**
     * The ZIP code in '1234AB' format for NL orders and '0000' format for BE orders.
     *
     * @var string
     */
    protected $zipCode;
    /**
     * The name of the city.
     *
     * @var string
     */
    protected $city;
    /**
     * The country code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * A scrambled email address that can be used to contact the customer.
     *
     * @var string
     */
    protected $email;
    /**
     * The company name.
     *
     * @var string
     */
    protected $company;
    /**
     * The delivery phone number of the customer. Filled in case the order requires an appointment for delivering the goods.
     *
     * @var string
     */
    protected $deliveryPhoneNumber;
    /**
     * The language of the customer in case of contact.
     *
     * @var string
     */
    protected $language;
    /**
     * The name of Pick Up Point location this order needs to be shipped to.
     *
     * @return string
     */
    public function getPickupPointName() : string
    {
        return $this->pickupPointName;
    }
    /**
     * The name of Pick Up Point location this order needs to be shipped to.
     *
     * @param string $pickupPointName
     *
     * @return self
     */
    public function setPickupPointName(string $pickupPointName) : self
    {
        $this->pickupPointName = $pickupPointName;
        return $this;
    }
    /**
     * The salutation of the customer.
     *
     * @return string
     */
    public function getSalutation() : string
    {
        return $this->salutation;
    }
    /**
     * The salutation of the customer.
     *
     * @param string $salutation
     *
     * @return self
     */
    public function setSalutation(string $salutation) : self
    {
        $this->salutation = $salutation;
        return $this;
    }
    /**
     * The first name of the customer.
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * The first name of the customer.
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * The surname of the customer.
     *
     * @return string
     */
    public function getSurname() : string
    {
        return $this->surname;
    }
    /**
     * The surname of the customer.
     *
     * @param string $surname
     *
     * @return self
     */
    public function setSurname(string $surname) : self
    {
        $this->surname = $surname;
        return $this;
    }
    /**
     * The street name.
     *
     * @return string
     */
    public function getStreetName() : string
    {
        return $this->streetName;
    }
    /**
     * The street name.
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
     * The house number.
     *
     * @return string
     */
    public function getHouseNumber() : string
    {
        return $this->houseNumber;
    }
    /**
     * The house number.
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
     * The extension on the house number.
     *
     * @return string
     */
    public function getHouseNumberExtension() : string
    {
        return $this->houseNumberExtension;
    }
    /**
     * The extension on the house number.
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
     * Additional information related to the address that helps in delivering the package.
     *
     * @return string
     */
    public function getExtraAddressInformation() : string
    {
        return $this->extraAddressInformation;
    }
    /**
     * Additional information related to the address that helps in delivering the package.
     *
     * @param string $extraAddressInformation
     *
     * @return self
     */
    public function setExtraAddressInformation(string $extraAddressInformation) : self
    {
        $this->extraAddressInformation = $extraAddressInformation;
        return $this;
    }
    /**
     * The ZIP code in '1234AB' format for NL orders and '0000' format for BE orders.
     *
     * @return string
     */
    public function getZipCode() : string
    {
        return $this->zipCode;
    }
    /**
     * The ZIP code in '1234AB' format for NL orders and '0000' format for BE orders.
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
     * The name of the city.
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * The name of the city.
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
     * The country code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The country code.
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
     * A scrambled email address that can be used to contact the customer.
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * A scrambled email address that can be used to contact the customer.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * The company name.
     *
     * @return string
     */
    public function getCompany() : string
    {
        return $this->company;
    }
    /**
     * The company name.
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany(string $company) : self
    {
        $this->company = $company;
        return $this;
    }
    /**
     * The delivery phone number of the customer. Filled in case the order requires an appointment for delivering the goods.
     *
     * @return string
     */
    public function getDeliveryPhoneNumber() : string
    {
        return $this->deliveryPhoneNumber;
    }
    /**
     * The delivery phone number of the customer. Filled in case the order requires an appointment for delivering the goods.
     *
     * @param string $deliveryPhoneNumber
     *
     * @return self
     */
    public function setDeliveryPhoneNumber(string $deliveryPhoneNumber) : self
    {
        $this->deliveryPhoneNumber = $deliveryPhoneNumber;
        return $this;
    }
    /**
     * The language of the customer in case of contact.
     *
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }
    /**
     * The language of the customer in case of contact.
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language) : self
    {
        $this->language = $language;
        return $this;
    }
}