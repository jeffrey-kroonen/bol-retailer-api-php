<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OrderOffer
{
    /**
     * Unique identifier for an offer.
     *
     * @var string
     */
    protected $offerId;
    /**
     * A user-defined reference tied to the offer upon creating the offer.
     *
     * @var string
     */
    protected $reference;
    /**
     * Unique identifier for an offer.
     *
     * @return string
     */
    public function getOfferId() : string
    {
        return $this->offerId;
    }
    /**
     * Unique identifier for an offer.
     *
     * @param string $offerId
     *
     * @return self
     */
    public function setOfferId(string $offerId) : self
    {
        $this->offerId = $offerId;
        return $this;
    }
    /**
     * A user-defined reference tied to the offer upon creating the offer.
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * A user-defined reference tied to the offer upon creating the offer.
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference) : self
    {
        $this->reference = $reference;
        return $this;
    }
}