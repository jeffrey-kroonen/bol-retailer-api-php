<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OrderOffer
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
     */
    public function getOfferId(): string
    {
        return $this->offerId;
    }

    /**
     * Unique identifier for an offer.
     */
    public function setOfferId(string $offerId): self
    {
        $this->initialized['offerId'] = true;
        $this->offerId = $offerId;

        return $this;
    }

    /**
     * A user-defined reference tied to the offer upon creating the offer.
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * A user-defined reference tied to the offer upon creating the offer.
     */
    public function setReference(string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;

        return $this;
    }
}
