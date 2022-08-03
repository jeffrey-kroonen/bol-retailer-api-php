<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Promotions
{
    /**
     * 
     *
     * @var object[]
     */
    protected $promotions;
    /**
     * 
     *
     * @return object[]
     */
    public function getPromotions() : array
    {
        return $this->promotions;
    }
    /**
     * 
     *
     * @param object[] $promotions
     *
     * @return self
     */
    public function setPromotions(array $promotions) : self
    {
        $this->promotions = $promotions;
        return $this;
    }
}