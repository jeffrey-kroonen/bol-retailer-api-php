<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ShipmentsResponse
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
     * @var ReducedShipment[]
     */
    protected $shipments;

    /**
     * @return ReducedShipment[]
     */
    public function getShipments(): array
    {
        return $this->shipments;
    }

    /**
     * @param ReducedShipment[] $shipments
     */
    public function setShipments(array $shipments): self
    {
        $this->initialized['shipments'] = true;
        $this->shipments = $shipments;

        return $this;
    }
}
