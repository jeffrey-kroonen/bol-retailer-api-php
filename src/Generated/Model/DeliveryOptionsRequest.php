<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class DeliveryOptionsRequest
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
     * Order items for which the delivery options are requested.
     *
     * @var DeliveryOptionsRequestOrderItem[]
     */
    protected $orderItems;

    /**
     * Order items for which the delivery options are requested.
     *
     * @return DeliveryOptionsRequestOrderItem[]
     */
    public function getOrderItems(): array
    {
        return $this->orderItems;
    }

    /**
     * Order items for which the delivery options are requested.
     *
     * @param DeliveryOptionsRequestOrderItem[] $orderItems
     */
    public function setOrderItems(array $orderItems): self
    {
        $this->initialized['orderItems'] = true;
        $this->orderItems = $orderItems;

        return $this;
    }
}
