<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OrderFulfilment
{
    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @var string
     */
    protected $method;
    /**
     * The party that manages the distribution, either bol.com or the retailer itself.
     *
     * @var string
     */
    protected $distributionParty;
    /**
     * The ultimate delivery date at which this order must be delivered at the customer's shipping address. This field is empty in case the exactDeliveryDate is filled.
     *
     * @var \DateTime
     */
    protected $latestDeliveryDate;
    /**
     * The exact delivery date at which this order must be delivered at the customer's shipping address. This field is only filled when the customer chose an exact date for delivery. This field is empty in case the latestDeliveryDate is filled.
     *
     * @var \DateTime
     */
    protected $exactDeliveryDate;
    /**
     * The date this order item will automatically expire and thereby cancelling this order item from the order.
     *
     * @var \DateTime
     */
    protected $expiryDate;
    /**
     * Delivery option selected by the customer.
     *
     * @var string
     */
    protected $timeFrameType;
    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method;
    }
    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method) : self
    {
        $this->method = $method;
        return $this;
    }
    /**
     * The party that manages the distribution, either bol.com or the retailer itself.
     *
     * @return string
     */
    public function getDistributionParty() : string
    {
        return $this->distributionParty;
    }
    /**
     * The party that manages the distribution, either bol.com or the retailer itself.
     *
     * @param string $distributionParty
     *
     * @return self
     */
    public function setDistributionParty(string $distributionParty) : self
    {
        $this->distributionParty = $distributionParty;
        return $this;
    }
    /**
     * The ultimate delivery date at which this order must be delivered at the customer's shipping address. This field is empty in case the exactDeliveryDate is filled.
     *
     * @return \DateTime
     */
    public function getLatestDeliveryDate() : \DateTime
    {
        return $this->latestDeliveryDate;
    }
    /**
     * The ultimate delivery date at which this order must be delivered at the customer's shipping address. This field is empty in case the exactDeliveryDate is filled.
     *
     * @param \DateTime $latestDeliveryDate
     *
     * @return self
     */
    public function setLatestDeliveryDate(\DateTime $latestDeliveryDate) : self
    {
        $this->latestDeliveryDate = $latestDeliveryDate;
        return $this;
    }
    /**
     * The exact delivery date at which this order must be delivered at the customer's shipping address. This field is only filled when the customer chose an exact date for delivery. This field is empty in case the latestDeliveryDate is filled.
     *
     * @return \DateTime
     */
    public function getExactDeliveryDate() : \DateTime
    {
        return $this->exactDeliveryDate;
    }
    /**
     * The exact delivery date at which this order must be delivered at the customer's shipping address. This field is only filled when the customer chose an exact date for delivery. This field is empty in case the latestDeliveryDate is filled.
     *
     * @param \DateTime $exactDeliveryDate
     *
     * @return self
     */
    public function setExactDeliveryDate(\DateTime $exactDeliveryDate) : self
    {
        $this->exactDeliveryDate = $exactDeliveryDate;
        return $this;
    }
    /**
     * The date this order item will automatically expire and thereby cancelling this order item from the order.
     *
     * @return \DateTime
     */
    public function getExpiryDate() : \DateTime
    {
        return $this->expiryDate;
    }
    /**
     * The date this order item will automatically expire and thereby cancelling this order item from the order.
     *
     * @param \DateTime $expiryDate
     *
     * @return self
     */
    public function setExpiryDate(\DateTime $expiryDate) : self
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }
    /**
     * Delivery option selected by the customer.
     *
     * @return string
     */
    public function getTimeFrameType() : string
    {
        return $this->timeFrameType;
    }
    /**
     * Delivery option selected by the customer.
     *
     * @param string $timeFrameType
     *
     * @return self
     */
    public function setTimeFrameType(string $timeFrameType) : self
    {
        $this->timeFrameType = $timeFrameType;
        return $this;
    }
}