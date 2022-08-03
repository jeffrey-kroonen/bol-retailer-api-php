<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class TotalPeriod
{
    /**
     * 
     *
     * @var object
     */
    protected $period;
    /**
     * The number of customer visits on the search page.
     *
     * @var int
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
     * The number of customer visits on the search page.
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * The number of customer visits on the search page.
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
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