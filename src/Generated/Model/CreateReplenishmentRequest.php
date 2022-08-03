<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class CreateReplenishmentRequest
{
    /**
     * Custom user reference for this replenishment. Must contain at least 1 digit and only upper case characters allowed.
     *
     * @var string
     */
    protected $reference;
    /**
     * 
     *
     * @var object
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
     * 
     *
     * @var object
     */
    protected $pickupAppointment;
    /**
     * 
     *
     * @var object[]
     */
    protected $lines;
    /**
     * Custom user reference for this replenishment. Must contain at least 1 digit and only upper case characters allowed.
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * Custom user reference for this replenishment. Must contain at least 1 digit and only upper case characters allowed.
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference) : self
    {
        $this->reference = $reference;
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
     * Indicates whether the replenishment will be labeled by bol.com.
     *
     * @return bool
     */
    public function getLabelingByBol() : bool
    {
        return $this->labelingByBol;
    }
    /**
     * Indicates whether the replenishment will be labeled by bol.com.
     *
     * @param bool $labelingByBol
     *
     * @return self
     */
    public function setLabelingByBol(bool $labelingByBol) : self
    {
        $this->labelingByBol = $labelingByBol;
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
     * @return object
     */
    public function getPickupAppointment()
    {
        return $this->pickupAppointment;
    }
    /**
     * 
     *
     * @param object $pickupAppointment
     *
     * @return self
     */
    public function setPickupAppointment($pickupAppointment) : self
    {
        $this->pickupAppointment = $pickupAppointment;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getLines() : array
    {
        return $this->lines;
    }
    /**
     * 
     *
     * @param object[] $lines
     *
     * @return self
     */
    public function setLines(array $lines) : self
    {
        $this->lines = $lines;
        return $this;
    }
}