<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ShipmentFulfilment
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
}