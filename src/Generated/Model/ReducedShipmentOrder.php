<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReducedShipmentOrder
{
    /**
     * A unique identifier for the order this shipment is related to.
     *
     * @var string
     */
    protected $orderId;
    /**
     * The date and time in ISO 8601 format when the order was placed.
     *
     * @var \DateTime
     */
    protected $orderPlacedDateTime;
    /**
     * A unique identifier for the order this shipment is related to.
     *
     * @return string
     */
    public function getOrderId() : string
    {
        return $this->orderId;
    }
    /**
     * A unique identifier for the order this shipment is related to.
     *
     * @param string $orderId
     *
     * @return self
     */
    public function setOrderId(string $orderId) : self
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * The date and time in ISO 8601 format when the order was placed.
     *
     * @return \DateTime
     */
    public function getOrderPlacedDateTime() : \DateTime
    {
        return $this->orderPlacedDateTime;
    }
    /**
     * The date and time in ISO 8601 format when the order was placed.
     *
     * @param \DateTime $orderPlacedDateTime
     *
     * @return self
     */
    public function setOrderPlacedDateTime(\DateTime $orderPlacedDateTime) : self
    {
        $this->orderPlacedDateTime = $orderPlacedDateTime;
        return $this;
    }
}