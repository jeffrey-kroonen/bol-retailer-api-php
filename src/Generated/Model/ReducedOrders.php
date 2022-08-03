<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReducedOrders
{
    /**
     * 
     *
     * @var object[]
     */
    protected $orders;
    /**
     * 
     *
     * @return object[]
     */
    public function getOrders() : array
    {
        return $this->orders;
    }
    /**
     * 
     *
     * @param object[] $orders
     *
     * @return self
     */
    public function setOrders(array $orders) : self
    {
        $this->orders = $orders;
        return $this;
    }
}