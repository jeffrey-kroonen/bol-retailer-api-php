<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ShipmentTransport
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
     * @var TransportEvent[]
     */
    protected $transportEvents;

    /**
     * The transport id.
     */
    public function getTransportId(): string
    {
        return $this->transportId;
    }

    /**
     * The transport id.
     */
    public function setTransportId(string $transportId): self
    {
        $this->initialized['transportId'] = true;
        $this->transportId = $transportId;

        return $this;
    }

    /**
     * Specify the transporter that will carry out the shipment.
     */
    public function getTransporterCode(): string
    {
        return $this->transporterCode;
    }

    /**
     * Specify the transporter that will carry out the shipment.
     */
    public function setTransporterCode(string $transporterCode): self
    {
        $this->initialized['transporterCode'] = true;
        $this->transporterCode = $transporterCode;

        return $this;
    }

    /**
     * The track and trace code that is associated with this transport.
     */
    public function getTrackAndTrace(): string
    {
        return $this->trackAndTrace;
    }

    /**
     * The track and trace code that is associated with this transport.
     */
    public function setTrackAndTrace(string $trackAndTrace): self
    {
        $this->initialized['trackAndTrace'] = true;
        $this->trackAndTrace = $trackAndTrace;

        return $this;
    }

    /**
     * The shipping label id.
     */
    public function getShippingLabelId(): string
    {
        return $this->shippingLabelId;
    }

    /**
     * The shipping label id.
     */
    public function setShippingLabelId(string $shippingLabelId): self
    {
        $this->initialized['shippingLabelId'] = true;
        $this->shippingLabelId = $shippingLabelId;

        return $this;
    }

    /**
     * @return TransportEvent[]
     */
    public function getTransportEvents(): array
    {
        return $this->transportEvents;
    }

    /**
     * @param TransportEvent[] $transportEvents
     */
    public function setTransportEvents(array $transportEvents): self
    {
        $this->initialized['transportEvents'] = true;
        $this->transportEvents = $transportEvents;

        return $this;
    }
}
