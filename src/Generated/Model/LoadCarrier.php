<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class LoadCarrier
{
    /**
     * The Serial Shipping Container Code (SSCC) for this load carrier.
     *
     * @var string
     */
    protected $sscc;
    /**
     * The track and trace code for this load carrier.
     *
     * @var string
     */
    protected $transportLabelTrackAndTrace;
    /**
     * The current state of the transport for this load carrier.
     *
     * @var string
     */
    protected $transportState;
    /**
     * The date and time in ISO 8601 format when the latest update for this transport was received.
     *
     * @var \DateTime
     */
    protected $transportStateUpdateDateTime;
    /**
     * The Serial Shipping Container Code (SSCC) for this load carrier.
     *
     * @return string
     */
    public function getSscc() : string
    {
        return $this->sscc;
    }
    /**
     * The Serial Shipping Container Code (SSCC) for this load carrier.
     *
     * @param string $sscc
     *
     * @return self
     */
    public function setSscc(string $sscc) : self
    {
        $this->sscc = $sscc;
        return $this;
    }
    /**
     * The track and trace code for this load carrier.
     *
     * @return string
     */
    public function getTransportLabelTrackAndTrace() : string
    {
        return $this->transportLabelTrackAndTrace;
    }
    /**
     * The track and trace code for this load carrier.
     *
     * @param string $transportLabelTrackAndTrace
     *
     * @return self
     */
    public function setTransportLabelTrackAndTrace(string $transportLabelTrackAndTrace) : self
    {
        $this->transportLabelTrackAndTrace = $transportLabelTrackAndTrace;
        return $this;
    }
    /**
     * The current state of the transport for this load carrier.
     *
     * @return string
     */
    public function getTransportState() : string
    {
        return $this->transportState;
    }
    /**
     * The current state of the transport for this load carrier.
     *
     * @param string $transportState
     *
     * @return self
     */
    public function setTransportState(string $transportState) : self
    {
        $this->transportState = $transportState;
        return $this;
    }
    /**
     * The date and time in ISO 8601 format when the latest update for this transport was received.
     *
     * @return \DateTime
     */
    public function getTransportStateUpdateDateTime() : \DateTime
    {
        return $this->transportStateUpdateDateTime;
    }
    /**
     * The date and time in ISO 8601 format when the latest update for this transport was received.
     *
     * @param \DateTime $transportStateUpdateDateTime
     *
     * @return self
     */
    public function setTransportStateUpdateDateTime(\DateTime $transportStateUpdateDateTime) : self
    {
        $this->transportStateUpdateDateTime = $transportStateUpdateDateTime;
        return $this;
    }
}