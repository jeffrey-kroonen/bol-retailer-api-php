<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class TransportEvent
{
    /**
     * The transport event code indicates the location of the parcel within the distribution process.
     *
     * @var string
     */
    protected $eventCode;
    /**
     * The date time of the transport event.
     *
     * @var \DateTime
     */
    protected $eventDateTime;
    /**
     * The transport event code indicates the location of the parcel within the distribution process.
     *
     * @return string
     */
    public function getEventCode() : string
    {
        return $this->eventCode;
    }
    /**
     * The transport event code indicates the location of the parcel within the distribution process.
     *
     * @param string $eventCode
     *
     * @return self
     */
    public function setEventCode(string $eventCode) : self
    {
        $this->eventCode = $eventCode;
        return $this;
    }
    /**
     * The date time of the transport event.
     *
     * @return \DateTime
     */
    public function getEventDateTime() : \DateTime
    {
        return $this->eventDateTime;
    }
    /**
     * The date time of the transport event.
     *
     * @param \DateTime $eventDateTime
     *
     * @return self
     */
    public function setEventDateTime(\DateTime $eventDateTime) : self
    {
        $this->eventDateTime = $eventDateTime;
        return $this;
    }
}