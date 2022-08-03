<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class PickupTimeSlotsRequest
{
    /**
     * 
     *
     * @var object
     */
    protected $address;
    /**
     * The number of load carriers in this shipment.
     *
     * @var int
     */
    protected $numberOfLoadCarriers;
    /**
     * 
     *
     * @return object
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param object $address
     *
     * @return self
     */
    public function setAddress($address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * The number of load carriers in this shipment.
     *
     * @return int
     */
    public function getNumberOfLoadCarriers() : int
    {
        return $this->numberOfLoadCarriers;
    }
    /**
     * The number of load carriers in this shipment.
     *
     * @param int $numberOfLoadCarriers
     *
     * @return self
     */
    public function setNumberOfLoadCarriers(int $numberOfLoadCarriers) : self
    {
        $this->numberOfLoadCarriers = $numberOfLoadCarriers;
        return $this;
    }
}