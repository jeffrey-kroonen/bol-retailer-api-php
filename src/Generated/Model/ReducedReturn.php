<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReducedReturn
{
    /**
     * Unique identifier for a return.
     *
     * @var string
     */
    protected $returnId;
    /**
     * The date and time in ISO 8601 format when this return was registered.
     *
     * @var \DateTime
     */
    protected $registrationDateTime;
    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @var string
     */
    protected $fulfilmentMethod;
    /**
     * 
     *
     * @var object[]
     */
    protected $returnItems;
    /**
     * Unique identifier for a return.
     *
     * @return string
     */
    public function getReturnId() : string
    {
        return $this->returnId;
    }
    /**
     * Unique identifier for a return.
     *
     * @param string $returnId
     *
     * @return self
     */
    public function setReturnId(string $returnId) : self
    {
        $this->returnId = $returnId;
        return $this;
    }
    /**
     * The date and time in ISO 8601 format when this return was registered.
     *
     * @return \DateTime
     */
    public function getRegistrationDateTime() : \DateTime
    {
        return $this->registrationDateTime;
    }
    /**
     * The date and time in ISO 8601 format when this return was registered.
     *
     * @param \DateTime $registrationDateTime
     *
     * @return self
     */
    public function setRegistrationDateTime(\DateTime $registrationDateTime) : self
    {
        $this->registrationDateTime = $registrationDateTime;
        return $this;
    }
    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @return string
     */
    public function getFulfilmentMethod() : string
    {
        return $this->fulfilmentMethod;
    }
    /**
     * The fulfilment method. Fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB).
     *
     * @param string $fulfilmentMethod
     *
     * @return self
     */
    public function setFulfilmentMethod(string $fulfilmentMethod) : self
    {
        $this->fulfilmentMethod = $fulfilmentMethod;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getReturnItems() : array
    {
        return $this->returnItems;
    }
    /**
     * 
     *
     * @param object[] $returnItems
     *
     * @return self
     */
    public function setReturnItems(array $returnItems) : self
    {
        $this->returnItems = $returnItems;
        return $this;
    }
}