<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Store
{
    /**
     * The product title for the product associated with this offer.
     *
     * @var string
     */
    protected $productTitle;
    /**
     * 
     *
     * @var object[]
     */
    protected $visible;
    /**
     * The product title for the product associated with this offer.
     *
     * @return string
     */
    public function getProductTitle() : string
    {
        return $this->productTitle;
    }
    /**
     * The product title for the product associated with this offer.
     *
     * @param string $productTitle
     *
     * @return self
     */
    public function setProductTitle(string $productTitle) : self
    {
        $this->productTitle = $productTitle;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getVisible() : array
    {
        return $this->visible;
    }
    /**
     * 
     *
     * @param object[] $visible
     *
     * @return self
     */
    public function setVisible(array $visible) : self
    {
        $this->visible = $visible;
        return $this;
    }
}