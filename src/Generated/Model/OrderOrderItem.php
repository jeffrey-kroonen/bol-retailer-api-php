<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OrderOrderItem
{
    /**
     * The id for the order item. One order can have multiple order items, but the list can only take one item.
     *
     * @var string
     */
    protected $orderItemId;
    /**
     * Indicates whether the order was cancelled on request of the customer before the retailer has shipped it.
     *
     * @var bool
     */
    protected $cancellationRequest;
    /**
     * 
     *
     * @var object
     */
    protected $fulfilment;
    /**
     * 
     *
     * @var object
     */
    protected $offer;
    /**
     * 
     *
     * @var object
     */
    protected $product;
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
     * The selling price to the customer of a single unit including VAT.
     *
     * @var float
     */
    protected $unitPrice;
    /**
     * The commission for all quantities of this order item.
     *
     * @var float
     */
    protected $commission;
    /**
     * 
     *
     * @var object[]
     */
    protected $additionalServices;
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
     * Indicates whether the order was cancelled on request of the customer before the retailer has shipped it.
     *
     * @return bool
     */
    public function getCancellationRequest() : bool
    {
        return $this->cancellationRequest;
    }
    /**
     * Indicates whether the order was cancelled on request of the customer before the retailer has shipped it.
     *
     * @param bool $cancellationRequest
     *
     * @return self
     */
    public function setCancellationRequest(bool $cancellationRequest) : self
    {
        $this->cancellationRequest = $cancellationRequest;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getFulfilment()
    {
        return $this->fulfilment;
    }
    /**
     * 
     *
     * @param object $fulfilment
     *
     * @return self
     */
    public function setFulfilment($fulfilment) : self
    {
        $this->fulfilment = $fulfilment;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getOffer()
    {
        return $this->offer;
    }
    /**
     * 
     *
     * @param object $offer
     *
     * @return self
     */
    public function setOffer($offer) : self
    {
        $this->offer = $offer;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getProduct()
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param object $product
     *
     * @return self
     */
    public function setProduct($product) : self
    {
        $this->product = $product;
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
    /**
     * The selling price to the customer of a single unit including VAT.
     *
     * @return float
     */
    public function getUnitPrice() : float
    {
        return $this->unitPrice;
    }
    /**
     * The selling price to the customer of a single unit including VAT.
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
    /**
     * The commission for all quantities of this order item.
     *
     * @return float
     */
    public function getCommission() : float
    {
        return $this->commission;
    }
    /**
     * The commission for all quantities of this order item.
     *
     * @param float $commission
     *
     * @return self
     */
    public function setCommission(float $commission) : self
    {
        $this->commission = $commission;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getAdditionalServices() : array
    {
        return $this->additionalServices;
    }
    /**
     * 
     *
     * @param object[] $additionalServices
     *
     * @return self
     */
    public function setAdditionalServices(array $additionalServices) : self
    {
        $this->additionalServices = $additionalServices;
        return $this;
    }
}