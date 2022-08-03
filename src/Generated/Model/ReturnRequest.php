<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReturnRequest
{
    /**
     * The handling result requested by the retailer.
     *
     * @var string
     */
    protected $handlingResult;
    /**
     * The quantity of items returned.
     *
     * @var int
     */
    protected $quantityReturned;
    /**
     * The handling result requested by the retailer.
     *
     * @return string
     */
    public function getHandlingResult() : string
    {
        return $this->handlingResult;
    }
    /**
     * The handling result requested by the retailer.
     *
     * @param string $handlingResult
     *
     * @return self
     */
    public function setHandlingResult(string $handlingResult) : self
    {
        $this->handlingResult = $handlingResult;
        return $this;
    }
    /**
     * The quantity of items returned.
     *
     * @return int
     */
    public function getQuantityReturned() : int
    {
        return $this->quantityReturned;
    }
    /**
     * The quantity of items returned.
     *
     * @param int $quantityReturned
     *
     * @return self
     */
    public function setQuantityReturned(int $quantityReturned) : self
    {
        $this->quantityReturned = $quantityReturned;
        return $this;
    }
}