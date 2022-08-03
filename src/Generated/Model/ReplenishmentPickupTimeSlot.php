<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReplenishmentPickupTimeSlot
{
    /**
     * The selected start date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $fromDateTime;
    /**
     * The selected end date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $untilDateTime;
    /**
     * The selected start date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getFromDateTime() : \DateTime
    {
        return $this->fromDateTime;
    }
    /**
     * The selected start date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @param \DateTime $fromDateTime
     *
     * @return self
     */
    public function setFromDateTime(\DateTime $fromDateTime) : self
    {
        $this->fromDateTime = $fromDateTime;
        return $this;
    }
    /**
     * The selected end date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getUntilDateTime() : \DateTime
    {
        return $this->untilDateTime;
    }
    /**
     * The selected end date and time for the replenishment pickup appointment. In ISO 8601 format.
     *
     * @param \DateTime $untilDateTime
     *
     * @return self
     */
    public function setUntilDateTime(\DateTime $untilDateTime) : self
    {
        $this->untilDateTime = $untilDateTime;
        return $this;
    }
}