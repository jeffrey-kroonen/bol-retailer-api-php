<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class BundlePrice
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
     * The minimum quantity a customer must order in order to receive discount. The element with value 1 must at least be present. In case of using more elements, the respective quantities must be in increasing order.
     *
     * @var int
     */
    protected $quantity;
    /**
     * The price per single unit including VAT in case the customer orders at least the quantity provided. When using more than 1 price, the respective prices must be in decreasing order using 2 decimal precision and dot separated.
     *
     * @var float
     */
    protected $unitPrice;

    /**
     * The minimum quantity a customer must order in order to receive discount. The element with value 1 must at least be present. In case of using more elements, the respective quantities must be in increasing order.
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * The minimum quantity a customer must order in order to receive discount. The element with value 1 must at least be present. In case of using more elements, the respective quantities must be in increasing order.
     */
    public function setQuantity(int $quantity): self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The price per single unit including VAT in case the customer orders at least the quantity provided. When using more than 1 price, the respective prices must be in decreasing order using 2 decimal precision and dot separated.
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    /**
     * The price per single unit including VAT in case the customer orders at least the quantity provided. When using more than 1 price, the respective prices must be in decreasing order using 2 decimal precision and dot separated.
     */
    public function setUnitPrice(float $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;

        return $this;
    }
}
