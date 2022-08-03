<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ShippingLabelRequest
{
    /**
     * Order items for which the delivery options are requested.
     *
     * @var object[]
     */
    protected $orderItems;
    /**
     * Shipping label offer id for which you request a shipping label.
     *
     * @var string
     */
    protected $shippingLabelOfferId;
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
    /**
     * Shipping label offer id for which you request a shipping label.
     *
     * @return string
     */
    public function getShippingLabelOfferId() : string
    {
        return $this->shippingLabelOfferId;
    }
    /**
     * Shipping label offer id for which you request a shipping label.
     *
     * @param string $shippingLabelOfferId
     *
     * @return self
     */
    public function setShippingLabelOfferId(string $shippingLabelOfferId) : self
    {
        $this->shippingLabelOfferId = $shippingLabelOfferId;
        return $this;
    }
}