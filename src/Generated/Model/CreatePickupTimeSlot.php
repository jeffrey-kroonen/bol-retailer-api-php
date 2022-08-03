<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class CreatePickupTimeSlot
{
    /**
     * The selected start date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @var string
     */
    protected $fromDateTime;
    /**
     * The selected end date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @var string
     */
    protected $untilDateTime;
    /**
     * The selected start date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @return string
     */
    public function getFromDateTime() : string
    {
        return $this->fromDateTime;
    }
    /**
     * The selected start date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @param string $fromDateTime
     *
     * @return self
     */
    public function setFromDateTime(string $fromDateTime) : self
    {
        $this->fromDateTime = $fromDateTime;
        return $this;
    }
    /**
     * The selected end date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @return string
     */
    public function getUntilDateTime() : string
    {
        return $this->untilDateTime;
    }
    /**
     * The selected end date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @param string $untilDateTime
     *
     * @return self
     */
    public function setUntilDateTime(string $untilDateTime) : self
    {
        $this->untilDateTime = $untilDateTime;
        return $this;
    }
}