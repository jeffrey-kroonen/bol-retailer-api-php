<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ShipmentTransport
{
    /**
     * The transport id.
     *
     * @var string
     */
    protected $transportId;
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
     * The shipping label id.
     *
     * @var string
     */
    protected $shippingLabelId;
    /**
     * 
     *
     * @var object[]
     */
    protected $transportEvents;
    /**
     * The transport id.
     *
     * @return string
     */
    public function getTransportId() : string
    {
        return $this->transportId;
    }
    /**
     * The transport id.
     *
     * @param string $transportId
     *
     * @return self
     */
    public function setTransportId(string $transportId) : self
    {
        $this->transportId = $transportId;
        return $this;
    }
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
    /**
     * The shipping label id.
     *
     * @return string
     */
    public function getShippingLabelId() : string
    {
        return $this->shippingLabelId;
    }
    /**
     * The shipping label id.
     *
     * @param string $shippingLabelId
     *
     * @return self
     */
    public function setShippingLabelId(string $shippingLabelId) : self
    {
        $this->shippingLabelId = $shippingLabelId;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getTransportEvents() : array
    {
        return $this->transportEvents;
    }
    /**
     * 
     *
     * @param object[] $transportEvents
     *
     * @return self
     */
    public function setTransportEvents(array $transportEvents) : self
    {
        $this->transportEvents = $transportEvents;
        return $this;
    }
}