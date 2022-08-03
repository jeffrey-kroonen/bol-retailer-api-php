<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class PickupAppointment
{
    /**
     * A comment to the transporter regarding the pickup appointment.
     *
     * @var string
     */
    protected $commentToTransporter;
    /**
     * 
     *
     * @var object
     */
    protected $address;
    /**
     * 
     *
     * @var object
     */
    protected $pickupTimeSlot;
    /**
     * The date and time in ISO 8601 format when this replenishment was picked up by the transporter.
     *
     * @var \DateTime
     */
    protected $pickupDateTime;
    /**
     * In case of a pickup cancellation this field indicates the reason for cancelling this pickup.
     *
     * @var string
     */
    protected $cancellationReason;
    /**
     * A comment to the transporter regarding the pickup appointment.
     *
     * @return string
     */
    public function getCommentToTransporter() : string
    {
        return $this->commentToTransporter;
    }
    /**
     * A comment to the transporter regarding the pickup appointment.
     *
     * @param string $commentToTransporter
     *
     * @return self
     */
    public function setCommentToTransporter(string $commentToTransporter) : self
    {
        $this->commentToTransporter = $commentToTransporter;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param object $address
     *
     * @return self
     */
    public function setAddress($address) : self
    {
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getPickupTimeSlot()
    {
        return $this->pickupTimeSlot;
    }
    /**
     * 
     *
     * @param object $pickupTimeSlot
     *
     * @return self
     */
    public function setPickupTimeSlot($pickupTimeSlot) : self
    {
        $this->pickupTimeSlot = $pickupTimeSlot;
        return $this;
    }
    /**
     * The date and time in ISO 8601 format when this replenishment was picked up by the transporter.
     *
     * @return \DateTime
     */
    public function getPickupDateTime() : \DateTime
    {
        return $this->pickupDateTime;
    }
    /**
     * The date and time in ISO 8601 format when this replenishment was picked up by the transporter.
     *
     * @param \DateTime $pickupDateTime
     *
     * @return self
     */
    public function setPickupDateTime(\DateTime $pickupDateTime) : self
    {
        $this->pickupDateTime = $pickupDateTime;
        return $this;
    }
    /**
     * In case of a pickup cancellation this field indicates the reason for cancelling this pickup.
     *
     * @return string
     */
    public function getCancellationReason() : string
    {
        return $this->cancellationReason;
    }
    /**
     * In case of a pickup cancellation this field indicates the reason for cancelling this pickup.
     *
     * @param string $cancellationReason
     *
     * @return self
     */
    public function setCancellationReason(string $cancellationReason) : self
    {
        $this->cancellationReason = $cancellationReason;
        return $this;
    }
}