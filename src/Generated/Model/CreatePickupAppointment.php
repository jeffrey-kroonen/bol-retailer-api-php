<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class CreatePickupAppointment
{
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
     * A comment to the transporter regarding the pickup appointment.
     *
     * @var string
     */
    protected $commentToTransporter;
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
}