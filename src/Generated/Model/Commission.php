<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Commission
{
    /**
     * The EAN number associated with this product.
     *
     * @var string
     */
    protected $ean;
    /**
     * The condition of the offer.
     *
     * @var string
     */
    protected $condition;
    /**
     * The intended selling price per single unit up to 2 decimals precision, including VAT.
     *
     * @var float
     */
    protected $unitPrice;
    /**
     * A fixed commission fee, including VAT.
     *
     * @var float
     */
    protected $fixedAmount;
    /**
     * A percentage of commission, based on the intended selling price per unit, including VAT.
     *
     * @var float
     */
    protected $percentage;
    /**
     * The total commission for selling this product at bol.com. The price includes VAT for Dutch sellers, and excludes VAT for Belgium sellers.
     *
     * @var float
     */
    protected $totalCost;
    /**
     * The total commission for selling this product at bol.com without reductions including VAT.
     *
     * @var float
     */
    protected $totalCostWithoutReduction;
    /**
     * 
     *
     * @var object[]
     */
    protected $reductions;
    /**
     * The EAN number associated with this product.
     *
     * @return string
     */
    public function getEan() : string
    {
        return $this->ean;
    }
    /**
     * The EAN number associated with this product.
     *
     * @param string $ean
     *
     * @return self
     */
    public function setEan(string $ean) : self
    {
        $this->ean = $ean;
        return $this;
    }
    /**
     * The condition of the offer.
     *
     * @return string
     */
    public function getCondition() : string
    {
        return $this->condition;
    }
    /**
     * The condition of the offer.
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
     * The intended selling price per single unit up to 2 decimals precision, including VAT.
     *
     * @return float
     */
    public function getUnitPrice() : float
    {
        return $this->unitPrice;
    }
    /**
     * The intended selling price per single unit up to 2 decimals precision, including VAT.
     *
     * @param float $unitPrice
     *
     * @return self
     */
    public function setUnitPrice(float $unitPrice) : self
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
    /**
     * A fixed commission fee, including VAT.
     *
     * @return float
     */
    public function getFixedAmount() : float
    {
        return $this->fixedAmount;
    }
    /**
     * A fixed commission fee, including VAT.
     *
     * @param float $fixedAmount
     *
     * @return self
     */
    public function setFixedAmount(float $fixedAmount) : self
    {
        $this->fixedAmount = $fixedAmount;
        return $this;
    }
    /**
     * A percentage of commission, based on the intended selling price per unit, including VAT.
     *
     * @return float
     */
    public function getPercentage() : float
    {
        return $this->percentage;
    }
    /**
     * A percentage of commission, based on the intended selling price per unit, including VAT.
     *
     * @param float $percentage
     *
     * @return self
     */
    public function setPercentage(float $percentage) : self
    {
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * The total commission for selling this product at bol.com. The price includes VAT for Dutch sellers, and excludes VAT for Belgium sellers.
     *
     * @return float
     */
    public function getTotalCost() : float
    {
        return $this->totalCost;
    }
    /**
     * The total commission for selling this product at bol.com. The price includes VAT for Dutch sellers, and excludes VAT for Belgium sellers.
     *
     * @param float $totalCost
     *
     * @return self
     */
    public function setTotalCost(float $totalCost) : self
    {
        $this->totalCost = $totalCost;
        return $this;
    }
    /**
     * The total commission for selling this product at bol.com without reductions including VAT.
     *
     * @return float
     */
    public function getTotalCostWithoutReduction() : float
    {
        return $this->totalCostWithoutReduction;
    }
    /**
     * The total commission for selling this product at bol.com without reductions including VAT.
     *
     * @param float $totalCostWithoutReduction
     *
     * @return self
     */
    public function setTotalCostWithoutReduction(float $totalCostWithoutReduction) : self
    {
        $this->totalCostWithoutReduction = $totalCostWithoutReduction;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getReductions() : array
    {
        return $this->reductions;
    }
    /**
     * 
     *
     * @param object[] $reductions
     *
     * @return self
     */
    public function setReductions(array $reductions) : self
    {
        $this->reductions = $reductions;
        return $this;
    }
}