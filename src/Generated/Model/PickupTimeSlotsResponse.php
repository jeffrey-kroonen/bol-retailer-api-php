<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class PickupTimeSlotsResponse
{
    /**
     * 
     *
     * @var object[]
     */
    protected $timeSlots;
    /**
     * 
     *
     * @return object[]
     */
    public function getTimeSlots() : array
    {
        return $this->timeSlots;
    }
    /**
     * 
     *
     * @param object[] $timeSlots
     *
     * @return self
     */
    public function setTimeSlots(array $timeSlots) : self
    {
        $this->timeSlots = $timeSlots;
        return $this;
    }
}