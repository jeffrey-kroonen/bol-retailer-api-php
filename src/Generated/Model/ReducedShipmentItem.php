<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReducedShipmentItem
{
    /**
     * A unique identifier for the item of the order that was shipped in this shipment.
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
}