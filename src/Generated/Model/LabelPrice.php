<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class LabelPrice
{
    /**
     * The price that is charged for this delivery option, excluding VAT.
     *
     * @var float
     */
    protected $totalPrice;
    /**
     * The price that is charged for this delivery option, excluding VAT.
     *
     * @return float
     */
    public function getTotalPrice() : float
    {
        return $this->totalPrice;
    }
    /**
     * The price that is charged for this delivery option, excluding VAT.
     *
     * @param float $totalPrice
     *
     * @return self
     */
    public function setTotalPrice(float $totalPrice) : self
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }
}