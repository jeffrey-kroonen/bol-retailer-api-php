<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class CreateDeliveryInfo
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
     * The expected delivery date of the shipment at the bol.com warehouse. In ISO 8601 format.
     *
     * @var string
     */
    protected $expectedDeliveryDate;
    /**
     * The transporter code that correlates to the transport used for this replenishment.
     *
     * @var string
     */
    protected $transporterCode;

    /**
     * The expected delivery date of the shipment at the bol.com warehouse. In ISO 8601 format.
     */
    public function getExpectedDeliveryDate(): string
    {
        return $this->expectedDeliveryDate;
    }

    /**
     * The expected delivery date of the shipment at the bol.com warehouse. In ISO 8601 format.
     */
    public function setExpectedDeliveryDate(string $expectedDeliveryDate): self
    {
        $this->initialized['expectedDeliveryDate'] = true;
        $this->expectedDeliveryDate = $expectedDeliveryDate;

        return $this;
    }

    /**
     * The transporter code that correlates to the transport used for this replenishment.
     */
    public function getTransporterCode(): string
    {
        return $this->transporterCode;
    }

    /**
     * The transporter code that correlates to the transport used for this replenishment.
     */
    public function setTransporterCode(string $transporterCode): self
    {
        $this->initialized['transporterCode'] = true;
        $this->transporterCode = $transporterCode;

        return $this;
    }
}
