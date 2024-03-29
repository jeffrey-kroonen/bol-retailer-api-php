<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class CreateReplenishmentRequest
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
     * Custom user reference for this replenishment. Must contain at least 1 digit and only upper case characters allowed.
     *
     * @var string
     */
    protected $reference;
    /**
     * @var CreateDeliveryInfo
     */
    protected $deliveryInfo;
    /**
     * Indicates whether the replenishment will be labeled by bol.com.
     *
     * @var bool
     */
    protected $labelingByBol;
    /**
     * The number of parcels in this replenishment. Note: if you are using the bol.com pickup service, the maximum number is 20.
     *
     * @var int
     */
    protected $numberOfLoadCarriers;
    /**
     * @var CreatePickupAppointment
     */
    protected $pickupAppointment;
    /**
     * @var CreateReplenishmentLine[]
     */
    protected $lines;

    /**
     * Custom user reference for this replenishment. Must contain at least 1 digit and only upper case characters allowed.
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * Custom user reference for this replenishment. Must contain at least 1 digit and only upper case characters allowed.
     */
    public function setReference(string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;

        return $this;
    }

    public function getDeliveryInfo(): CreateDeliveryInfo
    {
        return $this->deliveryInfo;
    }

    public function setDeliveryInfo(CreateDeliveryInfo $deliveryInfo): self
    {
        $this->initialized['deliveryInfo'] = true;
        $this->deliveryInfo = $deliveryInfo;

        return $this;
    }

    /**
     * Indicates whether the replenishment will be labeled by bol.com.
     */
    public function getLabelingByBol(): bool
    {
        return $this->labelingByBol;
    }

    /**
     * Indicates whether the replenishment will be labeled by bol.com.
     */
    public function setLabelingByBol(bool $labelingByBol): self
    {
        $this->initialized['labelingByBol'] = true;
        $this->labelingByBol = $labelingByBol;

        return $this;
    }

    /**
     * The number of parcels in this replenishment. Note: if you are using the bol.com pickup service, the maximum number is 20.
     */
    public function getNumberOfLoadCarriers(): int
    {
        return $this->numberOfLoadCarriers;
    }

    /**
     * The number of parcels in this replenishment. Note: if you are using the bol.com pickup service, the maximum number is 20.
     */
    public function setNumberOfLoadCarriers(int $numberOfLoadCarriers): self
    {
        $this->initialized['numberOfLoadCarriers'] = true;
        $this->numberOfLoadCarriers = $numberOfLoadCarriers;

        return $this;
    }

    public function getPickupAppointment(): CreatePickupAppointment
    {
        return $this->pickupAppointment;
    }

    public function setPickupAppointment(CreatePickupAppointment $pickupAppointment): self
    {
        $this->initialized['pickupAppointment'] = true;
        $this->pickupAppointment = $pickupAppointment;

        return $this;
    }

    /**
     * @return CreateReplenishmentLine[]
     */
    public function getLines(): array
    {
        return $this->lines;
    }

    /**
     * @param CreateReplenishmentLine[] $lines
     */
    public function setLines(array $lines): self
    {
        $this->initialized['lines'] = true;
        $this->lines = $lines;

        return $this;
    }
}
