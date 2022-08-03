<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OfferInsights
{
    /**
     * 
     *
     * @var object[]
     */
    protected $offerInsights;
    /**
     * 
     *
     * @return object[]
     */
    public function getOfferInsights() : array
    {
        return $this->offerInsights;
    }
    /**
     * 
     *
     * @param object[] $offerInsights
     *
     * @return self
     */
    public function setOfferInsights(array $offerInsights) : self
    {
        $this->offerInsights = $offerInsights;
        return $this;
    }
}