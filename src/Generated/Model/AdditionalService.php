<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class AdditionalService
{
    /**
     * An additional service type that the customer selected when purchasing this order item.
     *
     * @var string
     */
    protected $serviceType;
    /**
     * An additional service type that the customer selected when purchasing this order item.
     *
     * @return string
     */
    public function getServiceType() : string
    {
        return $this->serviceType;
    }
    /**
     * An additional service type that the customer selected when purchasing this order item.
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType) : self
    {
        $this->serviceType = $serviceType;
        return $this;
    }
}