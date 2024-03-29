<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class UpdateReplenishmentRequest
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
     * Update the state of the replenishment to cancel the replenishment.
     *
     * @var string
     */
    protected $state;
    /**
     * @var UpdateDeliveryInfo
     */
    protected $deliveryInfo;
    /**
     * The number of parcels in this replenishment. Note: if you are using the bol.com pickup service, the maximum number is 20.
     *
     * @var int
     */
    protected $numberOfLoadCarriers;
    /**
     * @var UpdateLoadCarrier[]
     */
    protected $loadCarriers;

    /**
     * Update the state of the replenishment to cancel the replenishment.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Update the state of the replenishment to cancel the replenishment.
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    public function getDeliveryInfo(): UpdateDeliveryInfo
    {
        return $this->deliveryInfo;
    }

    public function setDeliveryInfo(UpdateDeliveryInfo $deliveryInfo): self
    {
        $this->initialized['deliveryInfo'] = true;
        $this->deliveryInfo = $deliveryInfo;

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

    /**
     * @return UpdateLoadCarrier[]
     */
    public function getLoadCarriers(): array
    {
        return $this->loadCarriers;
    }

    /**
     * @param UpdateLoadCarrier[] $loadCarriers
     */
    public function setLoadCarriers(array $loadCarriers): self
    {
        $this->initialized['loadCarriers'] = true;
        $this->loadCarriers = $loadCarriers;

        return $this;
    }
}
