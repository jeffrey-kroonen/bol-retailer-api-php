<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Periods
{
    /**
     * 
     *
     * @var object
     */
    protected $period;
    /**
     * Total number of customer visits on the product page when the offer had the buy box over the requested period (excluding the current day).
     *
     * @var float
     */
    protected $total;
    /**
     * 
     *
     * @var object[]
     */
    protected $countries;
    /**
     * 
     *
     * @return object
     */
    public function getPeriod()
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param object $period
     *
     * @return self
     */
    public function setPeriod($period) : self
    {
        $this->period = $period;
        return $this;
    }
    /**
     * Total number of customer visits on the product page when the offer had the buy box over the requested period (excluding the current day).
     *
     * @return float
     */
    public function getTotal() : float
    {
        return $this->total;
    }
    /**
     * Total number of customer visits on the product page when the offer had the buy box over the requested period (excluding the current day).
     *
     * @param float $total
     *
     * @return self
     */
    public function setTotal(float $total) : self
    {
        $this->total = $total;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getCountries() : array
    {
        return $this->countries;
    }
    /**
     * 
     *
     * @param object[] $countries
     *
     * @return self
     */
    public function setCountries(array $countries) : self
    {
        $this->countries = $countries;
        return $this;
    }
}