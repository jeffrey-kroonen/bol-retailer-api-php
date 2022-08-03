<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Total
{
    /**
     * Minimum number of estimated sales expectations on the bol.com platform.
     *
     * @var float
     */
    protected $minimum;
    /**
     * Maximum number of estimated sales expectations on the bol.com platform.
     *
     * @var float
     */
    protected $maximum;
    /**
     * Minimum number of estimated sales expectations on the bol.com platform.
     *
     * @return float
     */
    public function getMinimum() : float
    {
        return $this->minimum;
    }
    /**
     * Minimum number of estimated sales expectations on the bol.com platform.
     *
     * @param float $minimum
     *
     * @return self
     */
    public function setMinimum(float $minimum) : self
    {
        $this->minimum = $minimum;
        return $this;
    }
    /**
     * Maximum number of estimated sales expectations on the bol.com platform.
     *
     * @return float
     */
    public function getMaximum() : float
    {
        return $this->maximum;
    }
    /**
     * Maximum number of estimated sales expectations on the bol.com platform.
     *
     * @param float $maximum
     *
     * @return self
     */
    public function setMaximum(float $maximum) : self
    {
        $this->maximum = $maximum;
        return $this;
    }
}