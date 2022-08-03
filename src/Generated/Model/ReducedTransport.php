<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReducedTransport
{
    /**
     * The transport id.
     *
     * @var string
     */
    protected $transportId;
    /**
     * The transport id.
     *
     * @return string
     */
    public function getTransportId() : string
    {
        return $this->transportId;
    }
    /**
     * The transport id.
     *
     * @param string $transportId
     *
     * @return self
     */
    public function setTransportId(string $transportId) : self
    {
        $this->transportId = $transportId;
        return $this;
    }
}