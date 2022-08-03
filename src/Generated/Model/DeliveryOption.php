<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class DeliveryOption
{
    /**
     * Unique identifier for the shipping label offer.
     *
     * @var string
     */
    protected $shippingLabelOfferId;
    /**
     * Indicates whether this delivery option is recommended to be the best option to ship your order item(s) with.
     *
     * @var bool
     */
    protected $recommended;
    /**
     * The date until the delivery option (incl total price) is valid.
     *
     * @var \DateTime
     */
    protected $validUntilDate;
    /**
     * A code representing the transporter which is being used for transportation.
     *
     * @var string
     */
    protected $transporterCode;
    /**
     * The type of the label, representing the way an item is being transported. MAILBOX is a mailbox package with delivery scan. MAILBOX_LIGHT is a mailbox package without delivery scan. PARCEL is a normal package.
     *
     * @var string
     */
    protected $labelType;
    /**
     * The display name of the shipping label.
     *
     * @var string
     */
    protected $labelDisplayName;
    /**
     * 
     *
     * @var object
     */
    protected $labelPrice;
    /**
     * 
     *
     * @var object
     */
    protected $packageRestrictions;
    /**
     * 
     *
     * @var object
     */
    protected $handoverDetails;
    /**
     * Unique identifier for the shipping label offer.
     *
     * @return string
     */
    public function getShippingLabelOfferId() : string
    {
        return $this->shippingLabelOfferId;
    }
    /**
     * Unique identifier for the shipping label offer.
     *
     * @param string $shippingLabelOfferId
     *
     * @return self
     */
    public function setShippingLabelOfferId(string $shippingLabelOfferId) : self
    {
        $this->shippingLabelOfferId = $shippingLabelOfferId;
        return $this;
    }
    /**
     * Indicates whether this delivery option is recommended to be the best option to ship your order item(s) with.
     *
     * @return bool
     */
    public function getRecommended() : bool
    {
        return $this->recommended;
    }
    /**
     * Indicates whether this delivery option is recommended to be the best option to ship your order item(s) with.
     *
     * @param bool $recommended
     *
     * @return self
     */
    public function setRecommended(bool $recommended) : self
    {
        $this->recommended = $recommended;
        return $this;
    }
    /**
     * The date until the delivery option (incl total price) is valid.
     *
     * @return \DateTime
     */
    public function getValidUntilDate() : \DateTime
    {
        return $this->validUntilDate;
    }
    /**
     * The date until the delivery option (incl total price) is valid.
     *
     * @param \DateTime $validUntilDate
     *
     * @return self
     */
    public function setValidUntilDate(\DateTime $validUntilDate) : self
    {
        $this->validUntilDate = $validUntilDate;
        return $this;
    }
    /**
     * A code representing the transporter which is being used for transportation.
     *
     * @return string
     */
    public function getTransporterCode() : string
    {
        return $this->transporterCode;
    }
    /**
     * A code representing the transporter which is being used for transportation.
     *
     * @param string $transporterCode
     *
     * @return self
     */
    public function setTransporterCode(string $transporterCode) : self
    {
        $this->transporterCode = $transporterCode;
        return $this;
    }
    /**
     * The type of the label, representing the way an item is being transported. MAILBOX is a mailbox package with delivery scan. MAILBOX_LIGHT is a mailbox package without delivery scan. PARCEL is a normal package.
     *
     * @return string
     */
    public function getLabelType() : string
    {
        return $this->labelType;
    }
    /**
     * The type of the label, representing the way an item is being transported. MAILBOX is a mailbox package with delivery scan. MAILBOX_LIGHT is a mailbox package without delivery scan. PARCEL is a normal package.
     *
     * @param string $labelType
     *
     * @return self
     */
    public function setLabelType(string $labelType) : self
    {
        $this->labelType = $labelType;
        return $this;
    }
    /**
     * The display name of the shipping label.
     *
     * @return string
     */
    public function getLabelDisplayName() : string
    {
        return $this->labelDisplayName;
    }
    /**
     * The display name of the shipping label.
     *
     * @param string $labelDisplayName
     *
     * @return self
     */
    public function setLabelDisplayName(string $labelDisplayName) : self
    {
        $this->labelDisplayName = $labelDisplayName;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getLabelPrice()
    {
        return $this->labelPrice;
    }
    /**
     * 
     *
     * @param object $labelPrice
     *
     * @return self
     */
    public function setLabelPrice($labelPrice) : self
    {
        $this->labelPrice = $labelPrice;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getPackageRestrictions()
    {
        return $this->packageRestrictions;
    }
    /**
     * 
     *
     * @param object $packageRestrictions
     *
     * @return self
     */
    public function setPackageRestrictions($packageRestrictions) : self
    {
        $this->packageRestrictions = $packageRestrictions;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getHandoverDetails()
    {
        return $this->handoverDetails;
    }
    /**
     * 
     *
     * @param object $handoverDetails
     *
     * @return self
     */
    public function setHandoverDetails($handoverDetails) : self
    {
        $this->handoverDetails = $handoverDetails;
        return $this;
    }
}