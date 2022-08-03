<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Order
{
    /**
     * The identifier of the order.
     *
     * @var string
     */
    protected $orderId;
    /**
     * Indicates whether this order is shipped to a Pick Up Point.
     *
     * @var bool
     */
    protected $pickupPoint;
    /**
     * The date and time in ISO 8601 format when the order was placed.
     *
     * @var \DateTime
     */
    protected $orderPlacedDateTime;
    /**
     * The address details where this order needs to be shipped to. This can be the customers' own address, a (company) business address or a Pick Up Point address.
     *
     * @var object
     */
    protected $shipmentDetails;
    /**
     * The details of the customer that is responsible for the financial fulfillment of this order.
     *
     * @var object
     */
    protected $billingDetails;
    /**
     * 
     *
     * @var object[]
     */
    protected $orderItems;
    /**
     * The identifier of the order.
     *
     * @return string
     */
    public function getOrderId() : string
    {
        return $this->orderId;
    }
    /**
     * The identifier of the order.
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
     * Indicates whether this order is shipped to a Pick Up Point.
     *
     * @return bool
     */
    public function getPickupPoint() : bool
    {
        return $this->pickupPoint;
    }
    /**
     * Indicates whether this order is shipped to a Pick Up Point.
     *
     * @param bool $pickupPoint
     *
     * @return self
     */
    public function setPickupPoint(bool $pickupPoint) : self
    {
        $this->pickupPoint = $pickupPoint;
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
    /**
     * The address details where this order needs to be shipped to. This can be the customers' own address, a (company) business address or a Pick Up Point address.
     *
     * @return object
     */
    public function getShipmentDetails()
    {
        return $this->shipmentDetails;
    }
    /**
     * The address details where this order needs to be shipped to. This can be the customers' own address, a (company) business address or a Pick Up Point address.
     *
     * @param object $shipmentDetails
     *
     * @return self
     */
    public function setShipmentDetails($shipmentDetails) : self
    {
        $this->shipmentDetails = $shipmentDetails;
        return $this;
    }
    /**
     * The details of the customer that is responsible for the financial fulfillment of this order.
     *
     * @return object
     */
    public function getBillingDetails()
    {
        return $this->billingDetails;
    }
    /**
     * The details of the customer that is responsible for the financial fulfillment of this order.
     *
     * @param object $billingDetails
     *
     * @return self
     */
    public function setBillingDetails($billingDetails) : self
    {
        $this->billingDetails = $billingDetails;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getOrderItems() : array
    {
        return $this->orderItems;
    }
    /**
     * 
     *
     * @param object[] $orderItems
     *
     * @return self
     */
    public function setOrderItems(array $orderItems) : self
    {
        $this->orderItems = $orderItems;
        return $this;
    }
}