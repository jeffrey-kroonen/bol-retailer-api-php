<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OfferInsight
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
     * @var OfferInsightsCountry[]
     */
    protected $countries;
    /**
     * @var Periods[]
     */
    protected $periods;

    /**
     * The name of the requested offer insight.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the requested offer insight.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Interpretation of the data that applies to this measurement.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Interpretation of the data that applies to this measurement.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Total number of customer visits on the product page when the offer had the buy box over the requested period (excluding the current day).
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * Total number of customer visits on the product page when the offer had the buy box over the requested period (excluding the current day).
     */
    public function setTotal(float $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }

    /**
     * @return OfferInsightsCountry[]
     */
    public function getCountries(): array
    {
        return $this->countries;
    }

    /**
     * @param OfferInsightsCountry[] $countries
     */
    public function setCountries(array $countries): self
    {
        $this->initialized['countries'] = true;
        $this->countries = $countries;

        return $this;
    }

    /**
     * @return Periods[]
     */
    public function getPeriods(): array
    {
        return $this->periods;
    }

    /**
     * @param Periods[] $periods
     */
    public function setPeriods(array $periods): self
    {
        $this->initialized['periods'] = true;
        $this->periods = $periods;

        return $this;
    }
}
