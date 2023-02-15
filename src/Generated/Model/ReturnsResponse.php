<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReturnsResponse
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
     * @var ReducedReturn[]
     */
    protected $returns;

    /**
     * @return ReducedReturn[]
     */
    public function getReturns(): array
    {
        return $this->returns;
    }

    /**
     * @param ReducedReturn[] $returns
     */
    public function setReturns(array $returns): self
    {
        $this->initialized['returns'] = true;
        $this->returns = $returns;

        return $this;
    }
}
