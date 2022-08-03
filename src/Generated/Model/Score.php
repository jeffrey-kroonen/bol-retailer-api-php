<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Score
{
    /**
     * Indicates whether the score conforms to the bol.com service norm or not.
     *
     * @var bool
     */
    protected $conforms;
    /**
     * The top part of the fraction (above the line). This usually is the smaller number compared to the denominator.
     *
     * @var int
     */
    protected $numerator;
    /**
     * The lower part of the fraction (below the line). This usually is the larger number compared to the the numerator.
     *
     * @var int
     */
    protected $denominator;
    /**
     * The score for this measurement (denominator divided by the numerator).
     *
     * @var float
     */
    protected $value;
    /**
     * The difference between the score and the bol.com service norm.
     *
     * @var float
     */
    protected $distanceToNorm;
    /**
     * Indicates whether the score conforms to the bol.com service norm or not.
     *
     * @return bool
     */
    public function getConforms() : bool
    {
        return $this->conforms;
    }
    /**
     * Indicates whether the score conforms to the bol.com service norm or not.
     *
     * @param bool $conforms
     *
     * @return self
     */
    public function setConforms(bool $conforms) : self
    {
        $this->conforms = $conforms;
        return $this;
    }
    /**
     * The top part of the fraction (above the line). This usually is the smaller number compared to the denominator.
     *
     * @return int
     */
    public function getNumerator() : int
    {
        return $this->numerator;
    }
    /**
     * The top part of the fraction (above the line). This usually is the smaller number compared to the denominator.
     *
     * @param int $numerator
     *
     * @return self
     */
    public function setNumerator(int $numerator) : self
    {
        $this->numerator = $numerator;
        return $this;
    }
    /**
     * The lower part of the fraction (below the line). This usually is the larger number compared to the the numerator.
     *
     * @return int
     */
    public function getDenominator() : int
    {
        return $this->denominator;
    }
    /**
     * The lower part of the fraction (below the line). This usually is the larger number compared to the the numerator.
     *
     * @param int $denominator
     *
     * @return self
     */
    public function setDenominator(int $denominator) : self
    {
        $this->denominator = $denominator;
        return $this;
    }
    /**
     * The score for this measurement (denominator divided by the numerator).
     *
     * @return float
     */
    public function getValue() : float
    {
        return $this->value;
    }
    /**
     * The score for this measurement (denominator divided by the numerator).
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
    /**
     * The difference between the score and the bol.com service norm.
     *
     * @return float
     */
    public function getDistanceToNorm() : float
    {
        return $this->distanceToNorm;
    }
    /**
     * The difference between the score and the bol.com service norm.
     *
     * @param float $distanceToNorm
     *
     * @return self
     */
    public function setDistanceToNorm(float $distanceToNorm) : self
    {
        $this->distanceToNorm = $distanceToNorm;
        return $this;
    }
}