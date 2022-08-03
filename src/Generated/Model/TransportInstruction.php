<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class TransportInstruction
{
    /**
     * Specify the transporter that will carry out the shipment.
     *
     * @var string
     */
    protected $transporterCode;
    /**
     * The track and trace code that is associated with this transport.
     *
     * @var string
     */
    protected $trackAndTrace;
    /**
     * Specify the transporter that will carry out the shipment.
     *
     * @return string
     */
    public function getTransporterCode() : string
    {
        return $this->transporterCode;
    }
    /**
     * Specify the transporter that will carry out the shipment.
     *
     * @param string $transporterCode
     *
     * @return self
     */
    public function setTransporterCode(string $transporterCode) : self
    {
        $this->transporterCode = $transporterCode;
        return $this;
    }
    /**
     * The track and trace code that is associated with this transport.
     *
     * @return string
     */
    public function getTrackAndTrace() : string
    {
        return $this->trackAndTrace;
    }
    /**
     * The track and trace code that is associated with this transport.
     *
     * @param string $trackAndTrace
     *
     * @return self
     */
    public function setTrackAndTrace(string $trackAndTrace) : self
    {
        $this->trackAndTrace = $trackAndTrace;
        return $this;
    }
}