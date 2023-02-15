<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class PickupTimeSlotsRequest
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
     * @var PickupTimeSlotsAddress
     */
    protected $address;
    /**
     * The number of load carriers in this shipment.
     *
     * @var int
     */
    protected $numberOfLoadCarriers;

    public function getAddress(): PickupTimeSlotsAddress
    {
        return $this->address;
    }

    public function setAddress(PickupTimeSlotsAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }

    /**
     * The number of load carriers in this shipment.
     */
    public function getNumberOfLoadCarriers(): int
    {
        return $this->numberOfLoadCarriers;
    }

    /**
     * The number of load carriers in this shipment.
     */
    public function setNumberOfLoadCarriers(int $numberOfLoadCarriers): self
    {
        $this->initialized['numberOfLoadCarriers'] = true;
        $this->numberOfLoadCarriers = $numberOfLoadCarriers;

        return $this;
    }
}
