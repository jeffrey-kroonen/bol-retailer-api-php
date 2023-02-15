<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Commission
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
     * @var Reduction[]
     */
    protected $reductions;

    /**
     * The EAN number associated with this product.
     */
    public function getEan(): string
    {
        return $this->ean;
    }

    /**
     * The EAN number associated with this product.
     */
    public function setEan(string $ean): self
    {
        $this->initialized['ean'] = true;
        $this->ean = $ean;

        return $this;
    }

    /**
     * The condition of the offer.
     */
    public function getCondition(): string
    {
        return $this->condition;
    }

    /**
     * The condition of the offer.
     */
    public function setCondition(string $condition): self
    {
        $this->initialized['condition'] = true;
        $this->condition = $condition;

        return $this;
    }

    /**
     * The intended selling price per single unit up to 2 decimals precision, including VAT.
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    /**
     * The intended selling price per single unit up to 2 decimals precision, including VAT.
     */
    public function setUnitPrice(float $unitPrice): self
    {
        $this->initialized['unitPrice'] = true;
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * A fixed commission fee, including VAT.
     */
    public function getFixedAmount(): float
    {
        return $this->fixedAmount;
    }

    /**
     * A fixed commission fee, including VAT.
     */
    public function setFixedAmount(float $fixedAmount): self
    {
        $this->initialized['fixedAmount'] = true;
        $this->fixedAmount = $fixedAmount;

        return $this;
    }

    /**
     * A percentage of commission, based on the intended selling price per unit, including VAT.
     */
    public function getPercentage(): float
    {
        return $this->percentage;
    }

    /**
     * A percentage of commission, based on the intended selling price per unit, including VAT.
     */
    public function setPercentage(float $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * The total commission for selling this product at bol.com. The price includes VAT for Dutch sellers, and excludes VAT for Belgium sellers.
     */
    public function getTotalCost(): float
    {
        return $this->totalCost;
    }

    /**
     * The total commission for selling this product at bol.com. The price includes VAT for Dutch sellers, and excludes VAT for Belgium sellers.
     */
    public function setTotalCost(float $totalCost): self
    {
        $this->initialized['totalCost'] = true;
        $this->totalCost = $totalCost;

        return $this;
    }

    /**
     * The total commission for selling this product at bol.com without reductions including VAT.
     */
    public function getTotalCostWithoutReduction(): float
    {
        return $this->totalCostWithoutReduction;
    }

    /**
     * The total commission for selling this product at bol.com without reductions including VAT.
     */
    public function setTotalCostWithoutReduction(float $totalCostWithoutReduction): self
    {
        $this->initialized['totalCostWithoutReduction'] = true;
        $this->totalCostWithoutReduction = $totalCostWithoutReduction;

        return $this;
    }

    /**
     * @return Reduction[]
     */
    public function getReductions(): array
    {
        return $this->reductions;
    }

    /**
     * @param Reduction[] $reductions
     */
    public function setReductions(array $reductions): self
    {
        $this->initialized['reductions'] = true;
        $this->reductions = $reductions;

        return $this;
    }
}
