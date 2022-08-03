<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class UpdateLoadCarrier
{
    /**
     * The Serial Shipping Container Code (SSCC) for this load carrier.
     *
     * @var string
     */
    protected $sscc;
    /**
     * The Serial Shipping Container Code (SSCC) for this load carrier.
     *
     * @return string
     */
    public function getSscc() : string
    {
        return $this->sscc;
    }
    /**
     * The Serial Shipping Container Code (SSCC) for this load carrier.
     *
     * @param string $sscc
     *
     * @return self
     */
    public function setSscc(string $sscc) : self
    {
        $this->sscc = $sscc;
        return $this;
    }
}