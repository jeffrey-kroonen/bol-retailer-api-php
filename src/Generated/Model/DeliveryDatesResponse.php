<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class DeliveryDatesResponse
{
    /**
     * Allowed delivery dates for shipments to the bol.com warehouse in ISO 8601 format.
     *
     * @var string[]
     */
    protected $deliveryDates;
    /**
     * Allowed delivery dates for shipments to the bol.com warehouse in ISO 8601 format.
     *
     * @return string[]
     */
    public function getDeliveryDates() : array
    {
        return $this->deliveryDates;
    }
    /**
     * Allowed delivery dates for shipments to the bol.com warehouse in ISO 8601 format.
     *
     * @param string[] $deliveryDates
     *
     * @return self
     */
    public function setDeliveryDates(array $deliveryDates) : self
    {
        $this->deliveryDates = $deliveryDates;
        return $this;
    }
}