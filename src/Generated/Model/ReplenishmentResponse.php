<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReplenishmentResponse
{
    /**
     * The unique identifier of the replenishment.
     *
     * @var string
     */
    protected $replenishmentId;
    /**
     * The date and time when this replenishment was created. In ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $creationDateTime;
    /**
     * Custom user defined reference to identify the replenishment.
     *
     * @var string
     */
    protected $reference;
    /**
     * Indicates whether the replenishment will be labeled by bol.com or not.
     *
     * @var bool
     */
    protected $labelingByBol;
    /**
     * Indicates the state of this replenishment order.
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var object
     */
    protected $deliveryInformation;
    /**
     * 
     *
     * @var object
     */
    protected $pickupAppointment;
    /**
     * The number of load carriers in this shipment.
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
     * 
     *
     * @var object[]
     */
    protected $lines;
    /**
     * 
     *
     * @var object[]
     */
    protected $invalidLines;
    /**
     * 
     *
     * @var object[]
     */
    protected $stateTransitions;
    /**
     * The unique identifier of the replenishment.
     *
     * @return string
     */
    public function getReplenishmentId() : string
    {
        return $this->replenishmentId;
    }
    /**
     * The unique identifier of the replenishment.
     *
     * @param string $replenishmentId
     *
     * @return self
     */
    public function setReplenishmentId(string $replenishmentId) : self
    {
        $this->replenishmentId = $replenishmentId;
        return $this;
    }
    /**
     * The date and time when this replenishment was created. In ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getCreationDateTime() : \DateTime
    {
        return $this->creationDateTime;
    }
    /**
     * The date and time when this replenishment was created. In ISO 8601 format.
     *
     * @param \DateTime $creationDateTime
     *
     * @return self
     */
    public function setCreationDateTime(\DateTime $creationDateTime) : self
    {
        $this->creationDateTime = $creationDateTime;
        return $this;
    }
    /**
     * Custom user defined reference to identify the replenishment.
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * Custom user defined reference to identify the replenishment.
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
     * Indicates whether the replenishment will be labeled by bol.com or not.
     *
     * @return bool
     */
    public function getLabelingByBol() : bool
    {
        return $this->labelingByBol;
    }
    /**
     * Indicates whether the replenishment will be labeled by bol.com or not.
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
     * Indicates the state of this replenishment order.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * Indicates the state of this replenishment order.
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
    public function getDeliveryInformation()
    {
        return $this->deliveryInformation;
    }
    /**
     * 
     *
     * @param object $deliveryInformation
     *
     * @return self
     */
    public function setDeliveryInformation($deliveryInformation) : self
    {
        $this->deliveryInformation = $deliveryInformation;
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
     * The number of load carriers in this shipment.
     *
     * @return int
     */
    public function getNumberOfLoadCarriers() : int
    {
        return $this->numberOfLoadCarriers;
    }
    /**
     * The number of load carriers in this shipment.
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
    /**
     * 
     *
     * @return object[]
     */
    public function getInvalidLines() : array
    {
        return $this->invalidLines;
    }
    /**
     * 
     *
     * @param object[] $invalidLines
     *
     * @return self
     */
    public function setInvalidLines(array $invalidLines) : self
    {
        $this->invalidLines = $invalidLines;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getStateTransitions() : array
    {
        return $this->stateTransitions;
    }
    /**
     * 
     *
     * @param object[] $stateTransitions
     *
     * @return self
     */
    public function setStateTransitions(array $stateTransitions) : self
    {
        $this->stateTransitions = $stateTransitions;
        return $this;
    }
}