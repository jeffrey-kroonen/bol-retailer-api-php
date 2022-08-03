<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class DeliveryOptionsRequest
{
    /**
     * Order items for which the delivery options are requested.
     *
     * @var object[]
     */
    protected $orderItems;
    /**
     * Order items for which the delivery options are requested.
     *
     * @return object[]
     */
    public function getOrderItems() : array
    {
        return $this->orderItems;
    }
    /**
     * Order items for which the delivery options are requested.
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