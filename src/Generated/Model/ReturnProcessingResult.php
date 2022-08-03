<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReturnProcessingResult
{
    /**
     * The processed quantity.
     *
     * @var int
     */
    protected $quantity;
    /**
     * The processing result of the return.
     *
     * @var string
     */
    protected $processingResult;
    /**
     * The handling result requested by the retailer.
     *
     * @var string
     */
    protected $handlingResult;
    /**
     * The date and time in ISO 8601 format when the return was processed.
     *
     * @var \DateTime
     */
    protected $processingDateTime;
    /**
     * The processed quantity.
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * The processed quantity.
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * The processing result of the return.
     *
     * @return string
     */
    public function getProcessingResult() : string
    {
        return $this->processingResult;
    }
    /**
     * The processing result of the return.
     *
     * @param string $processingResult
     *
     * @return self
     */
    public function setProcessingResult(string $processingResult) : self
    {
        $this->processingResult = $processingResult;
        return $this;
    }
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
     * The date and time in ISO 8601 format when the return was processed.
     *
     * @return \DateTime
     */
    public function getProcessingDateTime() : \DateTime
    {
        return $this->processingDateTime;
    }
    /**
     * The date and time in ISO 8601 format when the return was processed.
     *
     * @param \DateTime $processingDateTime
     *
     * @return self
     */
    public function setProcessingDateTime(\DateTime $processingDateTime) : self
    {
        $this->processingDateTime = $processingDateTime;
        return $this;
    }
}