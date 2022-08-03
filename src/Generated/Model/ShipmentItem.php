<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ShipmentItem
{
    /**
     * A unique identifier for the item of the order that was shipped in this shipment.
     *
     * @var string
     */
    protected $orderItemId;
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
     * Amount of the product being ordered.
     *
     * @var int
     */
    protected $quantity;
    /**
     * The selling price to the customer of a single unit including VAT.
     *
     * @var float
     */
    protected $unitPrice;
    /**
     * The commission.
     *
     * @var float
     */
    protected $commission;
    /**
     * A unique identifier for the item of the order that was shipped in this shipment.
     *
     * @return string
     */
    public function getOrderItemId() : string
    {
        return $this->orderItemId;
    }
    /**
     * A unique identifier for the item of the order that was shipped in this shipment.
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
     * Amount of the product being ordered.
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * Amount of the product being ordered.
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
     * The commission.
     *
     * @return float
     */
    public function getCommission() : float
    {
        return $this->commission;
    }
    /**
     * The commission.
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
}