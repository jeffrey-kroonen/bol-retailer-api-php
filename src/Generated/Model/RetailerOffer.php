<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class RetailerOffer
{
    /**
     * Unique identifier for an offer.
     *
     * @var string
     */
    protected $offerId;
    /**
     * The EAN number associated with this product. Note: in case an ISBN is provided, the ISBN will be replaced with the actual EAN belonging to this ISBN.
     *
     * @var string
     */
    protected $ean;
    /**
     * A user-defined reference that helps you identify this particular offer when receiving data from us. This element can optionally be left empty and has a maximum amount of 20 characters.
     *
     * @var string
     */
    protected $reference;
    /**
     * Indicates whether or not you want to put this offer for sale on the bol.com website. Defaults to false.
     *
     * @var bool
     */
    protected $onHoldByRetailer;
    /**
     * In case the item is not known to bol.com you can use this field to identify this particular product. Note: in case the product is known to bol.com, the unknown product title will not be stored.
     *
     * @var string
     */
    protected $unknownProductTitle;
    /**
     * 
     *
     * @var object
     */
    protected $pricing;
    /**
     * 
     *
     * @var object
     */
    protected $stock;
    /**
     * 
     *
     * @var object
     */
    protected $fulfilment;
    /**
     * 
     *
     * @var object
     */
    protected $store;
    /**
     * 
     *
     * @var object
     */
    protected $condition;
    /**
     * 
     *
     * @var object[]
     */
    protected $notPublishableReasons;
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
     * The EAN number associated with this product. Note: in case an ISBN is provided, the ISBN will be replaced with the actual EAN belonging to this ISBN.
     *
     * @return string
     */
    public function getEan() : string
    {
        return $this->ean;
    }
    /**
     * The EAN number associated with this product. Note: in case an ISBN is provided, the ISBN will be replaced with the actual EAN belonging to this ISBN.
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
     * A user-defined reference that helps you identify this particular offer when receiving data from us. This element can optionally be left empty and has a maximum amount of 20 characters.
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * A user-defined reference that helps you identify this particular offer when receiving data from us. This element can optionally be left empty and has a maximum amount of 20 characters.
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
    /**
     * Indicates whether or not you want to put this offer for sale on the bol.com website. Defaults to false.
     *
     * @return bool
     */
    public function getOnHoldByRetailer() : bool
    {
        return $this->onHoldByRetailer;
    }
    /**
     * Indicates whether or not you want to put this offer for sale on the bol.com website. Defaults to false.
     *
     * @param bool $onHoldByRetailer
     *
     * @return self
     */
    public function setOnHoldByRetailer(bool $onHoldByRetailer) : self
    {
        $this->onHoldByRetailer = $onHoldByRetailer;
        return $this;
    }
    /**
     * In case the item is not known to bol.com you can use this field to identify this particular product. Note: in case the product is known to bol.com, the unknown product title will not be stored.
     *
     * @return string
     */
    public function getUnknownProductTitle() : string
    {
        return $this->unknownProductTitle;
    }
    /**
     * In case the item is not known to bol.com you can use this field to identify this particular product. Note: in case the product is known to bol.com, the unknown product title will not be stored.
     *
     * @param string $unknownProductTitle
     *
     * @return self
     */
    public function setUnknownProductTitle(string $unknownProductTitle) : self
    {
        $this->unknownProductTitle = $unknownProductTitle;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getPricing()
    {
        return $this->pricing;
    }
    /**
     * 
     *
     * @param object $pricing
     *
     * @return self
     */
    public function setPricing($pricing) : self
    {
        $this->pricing = $pricing;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getStock()
    {
        return $this->stock;
    }
    /**
     * 
     *
     * @param object $stock
     *
     * @return self
     */
    public function setStock($stock) : self
    {
        $this->stock = $stock;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getFulfilment()
    {
        return $this->fulfilment;
    }
    /**
     * 
     *
     * @param object $fulfilment
     *
     * @return self
     */
    public function setFulfilment($fulfilment) : self
    {
        $this->fulfilment = $fulfilment;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getStore()
    {
        return $this->store;
    }
    /**
     * 
     *
     * @param object $store
     *
     * @return self
     */
    public function setStore($store) : self
    {
        $this->store = $store;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getCondition()
    {
        return $this->condition;
    }
    /**
     * 
     *
     * @param object $condition
     *
     * @return self
     */
    public function setCondition($condition) : self
    {
        $this->condition = $condition;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getNotPublishableReasons() : array
    {
        return $this->notPublishableReasons;
    }
    /**
     * 
     *
     * @param object[] $notPublishableReasons
     *
     * @return self
     */
    public function setNotPublishableReasons(array $notPublishableReasons) : self
    {
        $this->notPublishableReasons = $notPublishableReasons;
        return $this;
    }
}