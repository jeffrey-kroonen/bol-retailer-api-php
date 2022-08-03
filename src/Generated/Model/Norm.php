<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Norm
{
    /**
     * Condition norm for this indicator.
     *
     * @var string
     */
    protected $condition;
    /**
     * Service norm for this indicator.
     *
     * @var float
     */
    protected $value;
    /**
     * Condition norm for this indicator.
     *
     * @return string
     */
    public function getCondition() : string
    {
        return $this->condition;
    }
    /**
     * Condition norm for this indicator.
     *
     * @param string $condition
     *
     * @return self
     */
    public function setCondition(string $condition) : self
    {
        $this->condition = $condition;
        return $this;
    }
    /**
     * Service norm for this indicator.
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * Service norm for this indicator.
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value) : self
    {
        $this->value = $value;
        return $this;
    }
}