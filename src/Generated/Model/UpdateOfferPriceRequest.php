<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class UpdateOfferPriceRequest
{
    /**
     * 
     *
     * @var object
     */
    protected $pricing;
    /**
     * 
     *
     * @return object
     */
    public function getPricing()
    {
        return $this->pricing;
    }
    /**
     * 
     *
     * @param object $pricing
     *
     * @return self
     */
    public function setPricing($pricing) : self
    {
        $this->pricing = $pricing;
        return $this;
    }
}