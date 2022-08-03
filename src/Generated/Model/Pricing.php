<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Pricing
{
    /**
     * A set of prices (containing a quantity and selling price) that apply to this offer.
     *
     * @var object[]
     */
    protected $bundlePrices;
    /**
     * A set of prices (containing a quantity and selling price) that apply to this offer.
     *
     * @return object[]
     */
    public function getBundlePrices() : array
    {
        return $this->bundlePrices;
    }
    /**
     * A set of prices (containing a quantity and selling price) that apply to this offer.
     *
     * @param object[] $bundlePrices
     *
     * @return self
     */
    public function setBundlePrices(array $bundlePrices) : self
    {
        $this->bundlePrices = $bundlePrices;
        return $this;
    }
}