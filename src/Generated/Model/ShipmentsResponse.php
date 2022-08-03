<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ShipmentsResponse
{
    /**
     * 
     *
     * @var object[]
     */
    protected $shipments;
    /**
     * 
     *
     * @return object[]
     */
    public function getShipments() : array
    {
        return $this->shipments;
    }
    /**
     * 
     *
     * @param object[] $shipments
     *
     * @return self
     */
    public function setShipments(array $shipments) : self
    {
        $this->shipments = $shipments;
        return $this;
    }
}