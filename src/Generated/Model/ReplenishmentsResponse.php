<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReplenishmentsResponse
{
    /**
     * 
     *
     * @var object[]
     */
    protected $replenishments;
    /**
     * 
     *
     * @return object[]
     */
    public function getReplenishments() : array
    {
        return $this->replenishments;
    }
    /**
     * 
     *
     * @param object[] $replenishments
     *
     * @return self
     */
    public function setReplenishments(array $replenishments) : self
    {
        $this->replenishments = $replenishments;
        return $this;
    }
}