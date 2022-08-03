<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OfferInsight
{
    /**
     * The name of the requested offer insight.
     *
     * @var string
     */
    protected $name;
    /**
     * Interpretation of the data that applies to this measurement.
     *
     * @var string
     */
    protected $type;
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
     * @var object[]
     */
    protected $periods;
    /**
     * The name of the requested offer insight.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the requested offer insight.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Interpretation of the data that applies to this measurement.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Interpretation of the data that applies to this measurement.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
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
    /**
     * 
     *
     * @return object[]
     */
    public function getPeriods() : array
    {
        return $this->periods;
    }
    /**
     * 
     *
     * @param object[] $periods
     *
     * @return self
     */
    public function setPeriods(array $periods) : self
    {
        $this->periods = $periods;
        return $this;
    }
}