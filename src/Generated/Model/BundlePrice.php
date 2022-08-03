<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class BundlePrice
{
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
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * The minimum quantity a customer must order in order to receive discount. The element with value 1 must at least be present. In case of using more elements, the respective quantities must be in increasing order.
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * The price per single unit including VAT in case the customer orders at least the quantity provided. When using more than 1 price, the respective prices must be in decreasing order using 2 decimal precision and dot separated.
     *
     * @return float
     */
    public function getUnitPrice() : float
    {
        return $this->unitPrice;
    }
    /**
     * The price per single unit including VAT in case the customer orders at least the quantity provided. When using more than 1 price, the respective prices must be in decreasing order using 2 decimal precision and dot separated.
     *
     * @param float $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(float $unitPrice) : self
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
}