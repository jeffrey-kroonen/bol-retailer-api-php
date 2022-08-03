<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OrderProduct
{
    /**
     * The EAN number associated with this product.
     *
     * @var string
     */
    protected $ean;
    /**
     * Title of the product as shown on the webshop.
     *
     * @var string
     */
    protected $title;
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
     * Title of the product as shown on the webshop.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Title of the product as shown on the webshop.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
}