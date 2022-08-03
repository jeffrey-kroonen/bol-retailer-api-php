<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ProductLabelsProduct
{
    /**
     * The EAN number associated with this product.
     *
     * @var string
     */
    protected $ean;
    /**
     * The number of products to generate labels for.
     *
     * @var int
     */
    protected $quantity;
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
     * The number of products to generate labels for.
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * The number of products to generate labels for.
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
}