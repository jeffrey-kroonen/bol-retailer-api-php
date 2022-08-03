<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class DeliveryOptionsResponse
{
    /**
     * 
     *
     * @var object[]
     */
    protected $deliveryOptions;
    /**
     * 
     *
     * @return object[]
     */
    public function getDeliveryOptions() : array
    {
        return $this->deliveryOptions;
    }
    /**
     * 
     *
     * @param object[] $deliveryOptions
     *
     * @return self
     */
    public function setDeliveryOptions(array $deliveryOptions) : self
    {
        $this->deliveryOptions = $deliveryOptions;
        return $this;
    }
}