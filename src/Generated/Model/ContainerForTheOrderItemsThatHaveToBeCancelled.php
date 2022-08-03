<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ContainerForTheOrderItemsThatHaveToBeCancelled
{
    /**
     * List of order items to cancel. Order item id's must belong to the same order.
     *
     * @var object[]
     */
    protected $orderItems;
    /**
     * List of order items to cancel. Order item id's must belong to the same order.
     *
     * @return object[]
     */
    public function getOrderItems() : array
    {
        return $this->orderItems;
    }
    /**
     * List of order items to cancel. Order item id's must belong to the same order.
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