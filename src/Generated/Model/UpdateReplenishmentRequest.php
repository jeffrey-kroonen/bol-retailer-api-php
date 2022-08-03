<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class UpdateReplenishmentRequest
{
    /**
     * Update the state of the replenishment to cancel the replenishment.
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var object
     */
    protected $deliveryInfo;
    /**
     * The number of parcels in this replenishment. Note: if you are using the bol.com pickup service, the maximum number is 20.
     *
     * @var int
     */
    protected $numberOfLoadCarriers;
    /**
     * 
     *
     * @var object[]
     */
    protected $loadCarriers;
    /**
     * Update the state of the replenishment to cancel the replenishment.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * Update the state of the replenishment to cancel the replenishment.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getDeliveryInfo()
    {
        return $this->deliveryInfo;
    }
    /**
     * 
     *
     * @param object $deliveryInfo
     *
     * @return self
     */
    public function setDeliveryInfo($deliveryInfo) : self
    {
        $this->deliveryInfo = $deliveryInfo;
        return $this;
    }
    /**
     * The number of parcels in this replenishment. Note: if you are using the bol.com pickup service, the maximum number is 20.
     *
     * @return int
     */
    public function getNumberOfLoadCarriers() : int
    {
        return $this->numberOfLoadCarriers;
    }
    /**
     * The number of parcels in this replenishment. Note: if you are using the bol.com pickup service, the maximum number is 20.
     *
     * @param int $numberOfLoadCarriers
     *
     * @return self
     */
    public function setNumberOfLoadCarriers(int $numberOfLoadCarriers) : self
    {
        $this->numberOfLoadCarriers = $numberOfLoadCarriers;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getLoadCarriers() : array
    {
        return $this->loadCarriers;
    }
    /**
     * 
     *
     * @param object[] $loadCarriers
     *
     * @return self
     */
    public function setLoadCarriers(array $loadCarriers) : self
    {
        $this->loadCarriers = $loadCarriers;
        return $this;
    }
}