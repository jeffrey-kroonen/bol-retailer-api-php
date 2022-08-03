<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReturnsResponse
{
    /**
     * 
     *
     * @var object[]
     */
    protected $returns;
    /**
     * 
     *
     * @return object[]
     */
    public function getReturns() : array
    {
        return $this->returns;
    }
    /**
     * 
     *
     * @param object[] $returns
     *
     * @return self
     */
    public function setReturns(array $returns) : self
    {
        $this->returns = $returns;
        return $this;
    }
}