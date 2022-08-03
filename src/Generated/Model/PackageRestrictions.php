<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class PackageRestrictions
{
    /**
     * The weight of a package.
     *
     * @var string
     */
    protected $maxWeight;
    /**
     * The dimensions of a package.
     *
     * @var string
     */
    protected $maxDimensions;
    /**
     * The weight of a package.
     *
     * @return string
     */
    public function getMaxWeight() : string
    {
        return $this->maxWeight;
    }
    /**
     * The weight of a package.
     *
     * @param string $maxWeight
     *
     * @return self
     */
    public function setMaxWeight(string $maxWeight) : self
    {
        $this->maxWeight = $maxWeight;
        return $this;
    }
    /**
     * The dimensions of a package.
     *
     * @return string
     */
    public function getMaxDimensions() : string
    {
        return $this->maxDimensions;
    }
    /**
     * The dimensions of a package.
     *
     * @param string $maxDimensions
     *
     * @return self
     */
    public function setMaxDimensions(string $maxDimensions) : self
    {
        $this->maxDimensions = $maxDimensions;
        return $this;
    }
}