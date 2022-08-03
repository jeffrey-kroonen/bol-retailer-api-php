<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class BulkCommissionQuery
{
    /**
     * The EAN number associated with this product.
     *
     * @var string
     */
    protected $ean;
    /**
     * The condition of the offer.
     *
     * @var string
     */
    protected $condition;
    /**
     * The price of the product with a period as a decimal separator. The price should always have two decimals precision.
     *
     * @var float
     */
    protected $unitPrice;
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
     * The condition of the offer.
     *
     * @return string
     */
    public function getCondition() : string
    {
        return $this->condition;
    }
    /**
     * The condition of the offer.
     *
     * @param string $condition
     *
     * @return self
     */
    public function setCondition(string $condition) : self
    {
        $this->condition = $condition;
        return $this;
    }
    /**
     * The price of the product with a period as a decimal separator. The price should always have two decimals precision.
     *
     * @return float
     */
    public function getUnitPrice() : float
    {
        return $this->unitPrice;
    }
    /**
     * The price of the product with a period as a decimal separator. The price should always have two decimals precision.
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