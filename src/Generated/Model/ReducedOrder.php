<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReducedOrder
{
    /**
     * The identifier of the order.
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