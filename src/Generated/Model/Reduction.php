<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Reduction
{
    /**
     * Maximum offer price that can be used to benefit from a commission reduction, including VAT.
     *
     * @var float
     */
    protected $maximumPrice;
    /**
     * A reduction to the commission if the maximum price criteria is met, including VAT.
     *
     * @var float
     */
    protected $costReduction;
    /**
     * The start date from which the commission reduction is valid, in ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * The end date from which the commission reduction is not valid anymore, in ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $endDate;
    /**
     * Maximum offer price that can be used to benefit from a commission reduction, including VAT.
     *
     * @return float
     */
    public function getMaximumPrice() : float
    {
        return $this->maximumPrice;
    }
    /**
     * Maximum offer price that can be used to benefit from a commission reduction, including VAT.
     *
     * @param float $maximumPrice
     *
     * @return self
     */
    public function setMaximumPrice(float $maximumPrice) : self
    {
        $this->maximumPrice = $maximumPrice;
        return $this;
    }
    /**
     * A reduction to the commission if the maximum price criteria is met, including VAT.
     *
     * @return float
     */
    public function getCostReduction() : float
    {
        return $this->costReduction;
    }
    /**
     * A reduction to the commission if the maximum price criteria is met, including VAT.
     *
     * @param float $costReduction
     *
     * @return self
     */
    public function setCostReduction(float $costReduction) : self
    {
        $this->costReduction = $costReduction;
        return $this;
    }
    /**
     * The start date from which the commission reduction is valid, in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getStartDate() : \DateTime
    {
        return $this->startDate;
    }
    /**
     * The start date from which the commission reduction is valid, in ISO 8601 format.
     *
     * @param \DateTime $startDate
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * The end date from which the commission reduction is not valid anymore, in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getEndDate() : \DateTime
    {
        return $this->endDate;
    }
    /**
     * The end date from which the commission reduction is not valid anymore, in ISO 8601 format.
     *
     * @param \DateTime $endDate
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
}