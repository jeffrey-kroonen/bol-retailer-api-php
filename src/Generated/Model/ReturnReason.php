<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReturnReason
{
    /**
     * The main reason describing why the customer returned this product.
     *
     * @var string
     */
    protected $mainReason;
    /**
     * The sub reason describing why the customer returned this product in more detail.
     *
     * @var string
     */
    protected $detailedReason;
    /**
     * Additional details from the customer as to why this item was returned.
     *
     * @var string
     */
    protected $customerComments;
    /**
     * The main reason describing why the customer returned this product.
     *
     * @return string
     */
    public function getMainReason() : string
    {
        return $this->mainReason;
    }
    /**
     * The main reason describing why the customer returned this product.
     *
     * @param string $mainReason
     *
     * @return self
     */
    public function setMainReason(string $mainReason) : self
    {
        $this->mainReason = $mainReason;
        return $this;
    }
    /**
     * The sub reason describing why the customer returned this product in more detail.
     *
     * @return string
     */
    public function getDetailedReason() : string
    {
        return $this->detailedReason;
    }
    /**
     * The sub reason describing why the customer returned this product in more detail.
     *
     * @param string $detailedReason
     *
     * @return self
     */
    public function setDetailedReason(string $detailedReason) : self
    {
        $this->detailedReason = $detailedReason;
        return $this;
    }
    /**
     * Additional details from the customer as to why this item was returned.
     *
     * @return string
     */
    public function getCustomerComments() : string
    {
        return $this->customerComments;
    }
    /**
     * Additional details from the customer as to why this item was returned.
     *
     * @param string $customerComments
     *
     * @return self
     */
    public function setCustomerComments(string $customerComments) : self
    {
        $this->customerComments = $customerComments;
        return $this;
    }
}