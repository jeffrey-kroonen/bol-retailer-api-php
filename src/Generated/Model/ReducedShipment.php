<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReducedShipment
{
    /**
     * A unique identifier for this shipment.
     *
     * @var string
     */
    protected $shipmentId;
    /**
     * The date and time in ISO 8601 format when the order item was shipped.
     *
     * @var \DateTime
     */
    protected $shipmentDateTime;
    /**
     * Reference supplied by the user when this item was shipped.
     *
     * @var string
     */
    protected $shipmentReference;
    /**
     * 
     *
     * @var object
     */
    protected $order;
    /**
     * 
     *
     * @var object[]
     */
    protected $shipmentItems;
    /**
     * 
     *
     * @var object
     */
    protected $transport;
    /**
     * A unique identifier for this shipment.
     *
     * @return string
     */
    public function getShipmentId() : string
    {
        return $this->shipmentId;
    }
    /**
     * A unique identifier for this shipment.
     *
     * @param string $shipmentId
     *
     * @return self
     */
    public function setShipmentId(string $shipmentId) : self
    {
        $this->shipmentId = $shipmentId;
        return $this;
    }
    /**
     * The date and time in ISO 8601 format when the order item was shipped.
     *
     * @return \DateTime
     */
    public function getShipmentDateTime() : \DateTime
    {
        return $this->shipmentDateTime;
    }
    /**
     * The date and time in ISO 8601 format when the order item was shipped.
     *
     * @param \DateTime $shipmentDateTime
     *
     * @return self
     */
    public function setShipmentDateTime(\DateTime $shipmentDateTime) : self
    {
        $this->shipmentDateTime = $shipmentDateTime;
        return $this;
    }
    /**
     * Reference supplied by the user when this item was shipped.
     *
     * @return string
     */
    public function getShipmentReference() : string
    {
        return $this->shipmentReference;
    }
    /**
     * Reference supplied by the user when this item was shipped.
     *
     * @param string $shipmentReference
     *
     * @return self
     */
    public function setShipmentReference(string $shipmentReference) : self
    {
        $this->shipmentReference = $shipmentReference;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param object $order
     *
     * @return self
     */
    public function setOrder($order) : self
    {
        $this->order = $order;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getShipmentItems() : array
    {
        return $this->shipmentItems;
    }
    /**
     * 
     *
     * @param object[] $shipmentItems
     *
     * @return self
     */
    public function setShipmentItems(array $shipmentItems) : self
    {
        $this->shipmentItems = $shipmentItems;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getTransport()
    {
        return $this->transport;
    }
    /**
     * 
     *
     * @param object $transport
     *
     * @return self
     */
    public function setTransport($transport) : self
    {
        $this->transport = $transport;
        return $this;
    }
}