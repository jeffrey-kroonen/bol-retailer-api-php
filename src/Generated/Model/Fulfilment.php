<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Fulfilment
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     */
    public function setMethod(string $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;

        return $this;
    }

    /**
     * The delivery promise that applies to this offer. This value will only be used in combination with fulfilmentMethod 'FBR'.
     */
    public function getDeliveryCode(): string
    {
        return $this->deliveryCode;
    }

    /**
     * The delivery promise that applies to this offer. This value will only be used in combination with fulfilmentMethod 'FBR'.
     */
    public function setDeliveryCode(string $deliveryCode): self
    {
        $this->initialized['deliveryCode'] = true;
        $this->deliveryCode = $deliveryCode;

        return $this;
    }
}
