<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OrderItemCancellation
{
    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
     *
     * @var string
     */
    protected $orderItemId;
    /**
     * The code representing the reason for cancellation of this item.
     *
     * @var string
     */
    protected $reasonCode;
    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
     *
     * @return string
     */
    public function getOrderItemId() : string
    {
        return $this->orderItemId;
    }
    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
     *
     * @param string $orderItemId
     *
     * @return self
     */
    public function setOrderItemId(string $orderItemId) : self
    {
        $this->orderItemId = $orderItemId;
        return $this;
    }
    /**
     * The code representing the reason for cancellation of this item.
     *
     * @return string
     */
    public function getReasonCode() : string
    {
        return $this->reasonCode;
    }
    /**
     * The code representing the reason for cancellation of this item.
     *
     * @param string $reasonCode
     *
     * @return self
     */
    public function setReasonCode(string $reasonCode) : self
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }
}