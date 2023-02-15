<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class CustomerDetails
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
     * The delivery phone number of the customer. Filled in case the order requires an appointment for delivering the goods.
     *
     * @var string
     */
    protected $deliveryPhoneNumber;
    /**
     * The company name.
     *
     * @var string
     */
    protected $company;
    /**
     * The Value Added Tax (VAT) / BTW number for business sellers situated in the Netherlands.
     *
     * @var string
     */
    protected $vatNumber;

    /**
     * The salutation of the customer.
     */
    public function getSalutation(): string
    {
        return $this->salutation;
    }

    /**
     * The salutation of the customer.
     */
    public function setSalutation(string $salutation): self
    {
        $this->initialized['salutation'] = true;
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * The first name of the customer.
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * The first name of the customer.
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The surname of the customer.
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * The surname of the customer.
     */
    public function setSurname(string $surname): self
    {
        $this->initialized['surname'] = true;
        $this->surname = $surname;

        return $this;
    }

    /**
     * The street name.
     */
    public function getStreetName(): string
    {
        return $this->streetName;
    }

    /**
     * The street name.
     */
    public function setStreetName(string $streetName): self
    {
        $this->initialized['streetName'] = true;
        $this->streetName = $streetName;

        return $this;
    }

    /**
     * The house number.
     */
    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    /**
     * The house number.
     */
    public function setHouseNumber(string $houseNumber): self
    {
        $this->initialized['houseNumber'] = true;
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * The extension on the house number.
     */
    public function getHouseNumberExtension(): string
    {
        return $this->houseNumberExtension;
    }

    /**
     * The extension on the house number.
     */
    public function setHouseNumberExtension(string $houseNumberExtension): self
    {
        $this->initialized['houseNumberExtension'] = true;
        $this->houseNumberExtension = $houseNumberExtension;

        return $this;
    }

    /**
     * Additional information related to the address that helps in delivering the package.
     */
    public function getExtraAddressInformation(): string
    {
        return $this->extraAddressInformation;
    }

    /**
     * Additional information related to the address that helps in delivering the package.
     */
    public function setExtraAddressInformation(string $extraAddressInformation): self
    {
        $this->initialized['extraAddressInformation'] = true;
        $this->extraAddressInformation = $extraAddressInformation;

        return $this;
    }

    /**
     * The ZIP code in '1234AB' format for NL orders and '0000' format for BE orders.
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * The ZIP code in '1234AB' format for NL orders and '0000' format for BE orders.
     */
    public function setZipCode(string $zipCode): self
    {
        $this->initialized['zipCode'] = true;
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * The name of the city.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * The name of the city.
     */
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;

        return $this;
    }

    /**
     * The country code.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * The country code.
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * A scrambled email address that can be used to contact the customer.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * A scrambled email address that can be used to contact the customer.
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * The delivery phone number of the customer. Filled in case the order requires an appointment for delivering the goods.
     */
    public function getDeliveryPhoneNumber(): string
    {
        return $this->deliveryPhoneNumber;
    }

    /**
     * The delivery phone number of the customer. Filled in case the order requires an appointment for delivering the goods.
     */
    public function setDeliveryPhoneNumber(string $deliveryPhoneNumber): self
    {
        $this->initialized['deliveryPhoneNumber'] = true;
        $this->deliveryPhoneNumber = $deliveryPhoneNumber;

        return $this;
    }

    /**
     * The company name.
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * The company name.
     */
    public function setCompany(string $company): self
    {
        $this->initialized['company'] = true;
        $this->company = $company;

        return $this;
    }

    /**
     * The Value Added Tax (VAT) / BTW number for business sellers situated in the Netherlands.
     */
    public function getVatNumber(): string
    {
        return $this->vatNumber;
    }

    /**
     * The Value Added Tax (VAT) / BTW number for business sellers situated in the Netherlands.
     */
    public function setVatNumber(string $vatNumber): self
    {
        $this->initialized['vatNumber'] = true;
        $this->vatNumber = $vatNumber;

        return $this;
    }
}
