<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ProductLabelsRequest
{
    /**
     * The printer format to create labels for.
     *
     * @var string
     */
    protected $labelFormat;
    /**
     * 
     *
     * @var object[]
     */
    protected $products;
    /**
     * The printer format to create labels for.
     *
     * @return string
     */
    public function getLabelFormat() : string
    {
        return $this->labelFormat;
    }
    /**
     * The printer format to create labels for.
     *
     * @param string $labelFormat
     *
     * @return self
     */
    public function setLabelFormat(string $labelFormat) : self
    {
        $this->labelFormat = $labelFormat;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getProducts() : array
    {
        return $this->products;
    }
    /**
     * 
     *
     * @param object[] $products
     *
     * @return self
     */
    public function setProducts(array $products) : self
    {
        $this->products = $products;
        return $this;
    }
}