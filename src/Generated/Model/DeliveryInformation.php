<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class DeliveryInformation
{
    /**
     * The expected delivery date of the shipment at the bol.com warehouse in ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $expectedDeliveryDate;
    /**
     * The transporter that will pickup this replenishment.
     *
     * @var string
     */
    protected $transporterCode;
    /**
     * 
     *
     * @var object
     */
    protected $destinationWarehouse;
    /**
     * The expected delivery date of the shipment at the bol.com warehouse in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getExpectedDeliveryDate() : \DateTime
    {
        return $this->expectedDeliveryDate;
    }
    /**
     * The expected delivery date of the shipment at the bol.com warehouse in ISO 8601 format.
     *
     * @param \DateTime $expectedDeliveryDate
     *
     * @return self
     */
    public function setExpectedDeliveryDate(\DateTime $expectedDeliveryDate) : self
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }
    /**
     * The transporter that will pickup this replenishment.
     *
     * @return string
     */
    public function getTransporterCode() : string
    {
        return $this->transporterCode;
    }
    /**
     * The transporter that will pickup this replenishment.
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
     * 
     *
     * @return object
     */
    public function getDestinationWarehouse()
    {
        return $this->destinationWarehouse;
    }
    /**
     * 
     *
     * @param object $destinationWarehouse
     *
     * @return self
     */
    public function setDestinationWarehouse($destinationWarehouse) : self
    {
        $this->destinationWarehouse = $destinationWarehouse;
        return $this;
    }
}