<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class SalesForecastPeriod
{
    /**
     * The number of weeks into the future, starting from today.
     *
     * @var int
     */
    protected $weeksAhead;
    /**
     * 
     *
     * @var object
     */
    protected $total;
    /**
     * 
     *
     * @var object[]
     */
    protected $countries;
    /**
     * The number of weeks into the future, starting from today.
     *
     * @return int
     */
    public function getWeeksAhead() : int
    {
        return $this->weeksAhead;
    }
    /**
     * The number of weeks into the future, starting from today.
     *
     * @param int $weeksAhead
     *
     * @return self
     */
    public function setWeeksAhead(int $weeksAhead) : self
    {
        $this->weeksAhead = $weeksAhead;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param object $total
     *
     * @return self
     */
    public function setTotal($total) : self
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