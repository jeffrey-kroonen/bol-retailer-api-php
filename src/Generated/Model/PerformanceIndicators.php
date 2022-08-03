<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class PerformanceIndicators
{
    /**
     * 
     *
     * @var object[]
     */
    protected $performanceIndicators;
    /**
     * 
     *
     * @return object[]
     */
    public function getPerformanceIndicators() : array
    {
        return $this->performanceIndicators;
    }
    /**
     * 
     *
     * @param object[] $performanceIndicators
     *
     * @return self
     */
    public function setPerformanceIndicators(array $performanceIndicators) : self
    {
        $this->performanceIndicators = $performanceIndicators;
        return $this;
    }
}