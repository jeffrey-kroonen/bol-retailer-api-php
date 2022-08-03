<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Products
{
    /**
     * 
     *
     * @var object[]
     */
    protected $products;
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