<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OrderItem
{
    /**
     * The id for the order item (1 order can have multiple order items).
     *
     * @var string
     */
    protected $orderItemId;
    /**
     * The id for the order item (1 order can have multiple order items).
     *
     * @return string
     */
    public function getOrderItemId() : string
    {
        return $this->orderItemId;
    }
    /**
     * The id for the order item (1 order can have multiple order items).
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
}