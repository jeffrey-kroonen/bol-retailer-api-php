<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Fulfilment
{
    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @var string
     */
    protected $method;
    /**
     * The delivery promise that applies to this offer. This value will only be used in combination with fulfilmentMethod 'FBR'.
     *
     * @var string
     */
    protected $deliveryCode;
    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method;
    }
    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method) : self
    {
        $this->method = $method;
        return $this;
    }
    /**
     * The delivery promise that applies to this offer. This value will only be used in combination with fulfilmentMethod 'FBR'.
     *
     * @return string
     */
    public function getDeliveryCode() : string
    {
        return $this->deliveryCode;
    }
    /**
     * The delivery promise that applies to this offer. This value will only be used in combination with fulfilmentMethod 'FBR'.
     *
     * @param string $deliveryCode
     *
     * @return self
     */
    public function setDeliveryCode(string $deliveryCode) : self
    {
        $this->deliveryCode = $deliveryCode;
        return $this;
    }
}