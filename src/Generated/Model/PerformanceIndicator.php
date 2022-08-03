<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class PerformanceIndicator
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
    protected $details;
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
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * 
     *
     * @param object $details
     *
     * @return self
     */
    public function setDetails($details) : self
    {
        $this->details = $details;
        return $this;
    }
}