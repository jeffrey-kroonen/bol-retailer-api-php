<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class NotPublishableReason
{
    /**
     * Error code signalling that the offer is invalid.
     *
     * @var string
     */
    protected $code;
    /**
     * Error message describing the reason the offer is invalid.
     *
     * @var string
     */
    protected $description;
    /**
     * Error code signalling that the offer is invalid.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * Error code signalling that the offer is invalid.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * Error message describing the reason the offer is invalid.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Error message describing the reason the offer is invalid.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
}