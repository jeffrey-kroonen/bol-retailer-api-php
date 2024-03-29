<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReplenishmentsResponse
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
     * @var ReducedReplenishment[]
     */
    protected $replenishments;

    /**
     * @return ReducedReplenishment[]
     */
    public function getReplenishments(): array
    {
        return $this->replenishments;
    }

    /**
     * @param ReducedReplenishment[] $replenishments
     */
    public function setReplenishments(array $replenishments): self
    {
        $this->initialized['replenishments'] = true;
        $this->replenishments = $replenishments;

        return $this;
    }
}
