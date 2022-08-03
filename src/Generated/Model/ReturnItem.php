<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReturnItem
{
    /**
     * The RMA (Return Merchandise Authorization) identifier of the return.
     *
     * @var string
     */
    protected $rmaId;
    /**
     * The id of the customer order this return item is in.
     *
     * @var string
     */
    protected $orderId;
    /**
     * The EAN number associated with this product.
     *
     * @var string
     */
    protected $ean;
    /**
     * The product title.
     *
     * @var string
     */
    protected $title;
    /**
     * The quantity that is expected to be returned by the customer. Note: this can be greater than 1 in case the customer ordered a quantity greater than 1 of the same product in the same customer order.
     *
     * @var int
     */
    protected $expectedQuantity;
    /**
     * The reason why the customer returned this product.
     *
     * @var object
     */
    protected $returnReason;
    /**
     * The track and trace code that is associated with this transport.
     *
     * @var string
     */
    protected $trackAndTrace;
    /**
     * The name of the transporter.
     *
     * @var string
     */
    protected $transporterName;
    /**
     * Indicates if this return item has been handled (by the retailer).
     *
     * @var bool
     */
    protected $handled;
    /**
     * 
     *
     * @var object[]
     */
    protected $processingResults;
    /**
     * Information related to the customer.
     *
     * @var object
     */
    protected $customerDetails;
    /**
     * The RMA (Return Merchandise Authorization) identifier of the return.
     *
     * @return string
     */
    public function getRmaId() : string
    {
        return $this->rmaId;
    }
    /**
     * The RMA (Return Merchandise Authorization) identifier of the return.
     *
     * @param string $rmaId
     *
     * @return self
     */
    public function setRmaId(string $rmaId) : self
    {
        $this->rmaId = $rmaId;
        return $this;
    }
    /**
     * The id of the customer order this return item is in.
     *
     * @return string
     */
    public function getOrderId() : string
    {
        return $this->orderId;
    }
    /**
     * The id of the customer order this return item is in.
     *
     * @param string $orderId
     *
     * @return self
     */
    public function setOrderId(string $orderId) : self
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * The EAN number associated with this product.
     *
     * @return string
     */
    public function getEan() : string
    {
        return $this->ean;
    }
    /**
     * The EAN number associated with this product.
     *
     * @param string $ean
     *
     * @return self
     */
    public function setEan(string $ean) : self
    {
        $this->ean = $ean;
        return $this;
    }
    /**
     * The product title.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The product title.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * The quantity that is expected to be returned by the customer. Note: this can be greater than 1 in case the customer ordered a quantity greater than 1 of the same product in the same customer order.
     *
     * @return int
     */
    public function getExpectedQuantity() : int
    {
        return $this->expectedQuantity;
    }
    /**
     * The quantity that is expected to be returned by the customer. Note: this can be greater than 1 in case the customer ordered a quantity greater than 1 of the same product in the same customer order.
     *
     * @param int $expectedQuantity
     *
     * @return self
     */
    public function setExpectedQuantity(int $expectedQuantity) : self
    {
        $this->expectedQuantity = $expectedQuantity;
        return $this;
    }
    /**
     * The reason why the customer returned this product.
     *
     * @return object
     */
    public function getReturnReason()
    {
        return $this->returnReason;
    }
    /**
     * The reason why the customer returned this product.
     *
     * @param object $returnReason
     *
     * @return self
     */
    public function setReturnReason($returnReason) : self
    {
        $this->returnReason = $returnReason;
        return $this;
    }
    /**
     * The track and trace code that is associated with this transport.
     *
     * @return string
     */
    public function getTrackAndTrace() : string
    {
        return $this->trackAndTrace;
    }
    /**
     * The track and trace code that is associated with this transport.
     *
     * @param string $trackAndTrace
     *
     * @return self
     */
    public function setTrackAndTrace(string $trackAndTrace) : self
    {
        $this->trackAndTrace = $trackAndTrace;
        return $this;
    }
    /**
     * The name of the transporter.
     *
     * @return string
     */
    public function getTransporterName() : string
    {
        return $this->transporterName;
    }
    /**
     * The name of the transporter.
     *
     * @param string $transporterName
     *
     * @return self
     */
    public function setTransporterName(string $transporterName) : self
    {
        $this->transporterName = $transporterName;
        return $this;
    }
    /**
     * Indicates if this return item has been handled (by the retailer).
     *
     * @return bool
     */
    public function getHandled() : bool
    {
        return $this->handled;
    }
    /**
     * Indicates if this return item has been handled (by the retailer).
     *
     * @param bool $handled
     *
     * @return self
     */
    public function setHandled(bool $handled) : self
    {
        $this->handled = $handled;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getProcessingResults() : array
    {
        return $this->processingResults;
    }
    /**
     * 
     *
     * @param object[] $processingResults
     *
     * @return self
     */
    public function setProcessingResults(array $processingResults) : self
    {
        $this->processingResults = $processingResults;
        return $this;
    }
    /**
     * Information related to the customer.
     *
     * @return object
     */
    public function getCustomerDetails()
    {
        return $this->customerDetails;
    }
    /**
     * Information related to the customer.
     *
     * @param object $customerDetails
     *
     * @return self
     */
    public function setCustomerDetails($customerDetails) : self
    {
        $this->customerDetails = $customerDetails;
        return $this;
    }
}