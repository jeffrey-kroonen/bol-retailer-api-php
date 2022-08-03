<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ShipmentRequest
{
    /**
     * Single element list with the order item to ship.
     *
     * @var object[]
     */
    protected $orderItems;
    /**
     * A user-defined reference that you can provide to add to the shipment. Can be used for own administration purposes. Only 'null' or non-empty strings accepted.
     *
     * @var string
     */
    protected $shipmentReference;
    /**
     * The identifier of the purchased shipping label.
     *
     * @var string
     */
    protected $shippingLabelId;
    /**
     * 
     *
     * @var object
     */
    protected $transport;
    /**
     * Single element list with the order item to ship.
     *
     * @return object[]
     */
    public function getOrderItems() : array
    {
        return $this->orderItems;
    }
    /**
     * Single element list with the order item to ship.
     *
     * @param object[] $orderItems
     *
     * @return self
     */
    public function setOrderItems(array $orderItems) : self
    {
        $this->orderItems = $orderItems;
        return $this;
    }
    /**
     * A user-defined reference that you can provide to add to the shipment. Can be used for own administration purposes. Only 'null' or non-empty strings accepted.
     *
     * @return string
     */
    public function getShipmentReference() : string
    {
        return $this->shipmentReference;
    }
    /**
     * A user-defined reference that you can provide to add to the shipment. Can be used for own administration purposes. Only 'null' or non-empty strings accepted.
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
     * The identifier of the purchased shipping label.
     *
     * @return string
     */
    public function getShippingLabelId() : string
    {
        return $this->shippingLabelId;
    }
    /**
     * The identifier of the purchased shipping label.
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