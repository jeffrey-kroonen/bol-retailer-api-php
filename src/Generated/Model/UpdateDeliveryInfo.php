<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class UpdateDeliveryInfo
{
    /**
     * The expected delivery date of the shipment at the bol.com warehouse. In ISO 8601 format.
     *
     * @var string
     */
    protected $expectedDeliveryDate;
    /**
     * The expected delivery date of the shipment at the bol.com warehouse. In ISO 8601 format.
     *
     * @return string
     */
    public function getExpectedDeliveryDate() : string
    {
        return $this->expectedDeliveryDate;
    }
    /**
     * The expected delivery date of the shipment at the bol.com warehouse. In ISO 8601 format.
     *
     * @param string $expectedDeliveryDate
     *
     * @return self
     */
    public function setExpectedDeliveryDate(string $expectedDeliveryDate) : self
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }
}