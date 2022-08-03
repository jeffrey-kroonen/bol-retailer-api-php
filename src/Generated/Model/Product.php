<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Product
{
    /**
     * The EAN number associated with this product.
     *
     * @var string
     */
    protected $ean;
    /**
     * 
     *
     * @var object[]
     */
    protected $relevanceScores;
    /**
     * The maximum price a product can have in order to be part of the promotion.
     *
     * @var float
     */
    protected $maximumPrice;
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
     * 
     *
     * @return object[]
     */
    public function getRelevanceScores() : array
    {
        return $this->relevanceScores;
    }
    /**
     * 
     *
     * @param object[] $relevanceScores
     *
     * @return self
     */
    public function setRelevanceScores(array $relevanceScores) : self
    {
        $this->relevanceScores = $relevanceScores;
        return $this;
    }
    /**
     * The maximum price a product can have in order to be part of the promotion.
     *
     * @return float
     */
    public function getMaximumPrice() : float
    {
        return $this->maximumPrice;
    }
    /**
     * The maximum price a product can have in order to be part of the promotion.
     *
     * @param float $maximumPrice
     *
     * @return self
     */
    public function setMaximumPrice(float $maximumPrice) : self
    {
        $this->maximumPrice = $maximumPrice;
        return $this;
    }
}