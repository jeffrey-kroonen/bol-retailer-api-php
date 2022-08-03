<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Inventory
{
    /**
     * The EAN number associated with this product.
     *
     * @var string
     */
    protected $ean;
    /**
     * The BSKU number associated with this product.
     *
     * @var string
     */
    protected $bsku;
    /**
     * The stock that is not available for sale anymore.
     *
     * @var int
     */
    protected $gradedStock;
    /**
     * The stock that is available for sale.
     *
     * @var int
     */
    protected $regularStock;
    /**
     * The product title.
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
     * The BSKU number associated with this product.
     *
     * @return string
     */
    public function getBsku() : string
    {
        return $this->bsku;
    }
    /**
     * The BSKU number associated with this product.
     *
     * @param string $bsku
     *
     * @return self
     */
    public function setBsku(string $bsku) : self
    {
        $this->bsku = $bsku;
        return $this;
    }
    /**
     * The stock that is not available for sale anymore.
     *
     * @return int
     */
    public function getGradedStock() : int
    {
        return $this->gradedStock;
    }
    /**
     * The stock that is not available for sale anymore.
     *
     * @param int $gradedStock
     *
     * @return self
     */
    public function setGradedStock(int $gradedStock) : self
    {
        $this->gradedStock = $gradedStock;
        return $this;
    }
    /**
     * The stock that is available for sale.
     *
     * @return int
     */
    public function getRegularStock() : int
    {
        return $this->regularStock;
    }
    /**
     * The stock that is available for sale.
     *
     * @param int $regularStock
     *
     * @return self
     */
    public function setRegularStock(int $regularStock) : self
    {
        $this->regularStock = $regularStock;
        return $this;
    }
    /**
     * The product title.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The product title.
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