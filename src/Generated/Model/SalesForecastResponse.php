<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class SalesForecastResponse
{
    /**
     * Indicator name.
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
     * 
     *
     * @var object[]
     */
    protected $periods;
    /**
     * Indicator name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Indicator name.
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