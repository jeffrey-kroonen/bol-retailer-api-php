<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class CreateDeliveryInfo
{
    /**
     * The expected delivery date of the shipment at the bol.com warehouse. In ISO 8601 format.
     *
     * @var string
     */
    protected $expectedDeliveryDate;
    /**
     * The transporter code that correlates to the transport used for this replenishment.
     *
     * @var string
     */
    protected $transporterCode;
    /**
     * The expected delivery date of the shipment at the bol.com warehouse. In ISO 8601 format.
     *
     * @return string
     */
    public function getExpectedDeliveryDate() : string
    {
        return $this->expectedDeliveryDate;
    }
    /**
     * The expected delivery date of the shipment at the bol.com warehouse. In ISO 8601 format.
     *
     * @param string $expectedDeliveryDate
     *
     * @return self
     */
    public function setExpectedDeliveryDate(string $expectedDeliveryDate) : self
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
        return $this;
    }
    /**
     * The transporter code that correlates to the transport used for this replenishment.
     *
     * @return string
     */
    public function getTransporterCode() : string
    {
        return $this->transporterCode;
    }
    /**
     * The transporter code that correlates to the transport used for this replenishment.
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
}