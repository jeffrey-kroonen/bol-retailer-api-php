<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReducedReplenishmentLines
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
}
