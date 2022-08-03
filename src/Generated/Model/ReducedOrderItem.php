<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReducedOrderItem
{
    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
     *
     * @var string
     */
    protected $orderItemId;
    /**
     * The EAN number associated with this product.
     *
     * @var string
     */
    protected $ean;
    /**
     * Amount of ordered products for this order item id.
     *
     * @var int
     */
    protected $quantity;
    /**
     * Amount of shipped products for this order item id.
     *
     * @var int
     */
    protected $quantityShipped;
    /**
     * Amount of cancelled products for this order item id.
     *
     * @var int
     */
    protected $quantityCancelled;
    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
     *
     * @return string
     */
    public function getOrderItemId() : string
    {
        return $this->orderItemId;
    }
    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
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
    /**
     * The EAN number associated with this product.
     *
     * @return string
     */
    public function getEan() : string
    {
        return $this->ean;
    }
    /**
     * The EAN number associated with this product.
     *
     * @param string $ean
     *
     * @return self
     */
    public function setEan(string $ean) : self
    {
        $this->ean = $ean;
        return $this;
    }
    /**
     * Amount of ordered products for this order item id.
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * Amount of ordered products for this order item id.
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
     * Amount of shipped products for this order item id.
     *
     * @return int
     */
    public function getQuantityShipped() : int
    {
        return $this->quantityShipped;
    }
    /**
     * Amount of shipped products for this order item id.
     *
     * @param int $quantityShipped
     *
     * @return self
     */
    public function setQuantityShipped(int $quantityShipped) : self
    {
        $this->quantityShipped = $quantityShipped;
        return $this;
    }
    /**
     * Amount of cancelled products for this order item id.
     *
     * @return int
     */
    public function getQuantityCancelled() : int
    {
        return $this->quantityCancelled;
    }
    /**
     * Amount of cancelled products for this order item id.
     *
     * @param int $quantityCancelled
     *
     * @return self
     */
    public function setQuantityCancelled(int $quantityCancelled) : self
    {
        $this->quantityCancelled = $quantityCancelled;
        return $this;
    }
}