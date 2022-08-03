<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReducedPromotion
{
    /**
     * The identifier of the promotion.
     *
     * @var string
     */
    protected $promotionId;
    /**
     * The title of the promotion.
     *
     * @var string
     */
    protected $title;
    /**
     * The starting date and time of the promotion.
     *
     * @var \DateTime
     */
    protected $startDateTime;
    /**
     * The ending date and time of the promotion.
     *
     * @var \DateTime
     */
    protected $endDateTime;
    /**
     * 
     *
     * @var object[]
     */
    protected $countries;
    /**
     * The type of the promotion.
     *
     * @var string
     */
    protected $promotionType;
    /**
     * Indicates whether the promotion is retailer specific or open to the platform.
     *
     * @var bool
     */
    protected $retailerSpecificPromotion;
    /**
     * 
     *
     * @var object
     */
    protected $campaign;
    /**
     * The identifier of the promotion.
     *
     * @return string
     */
    public function getPromotionId() : string
    {
        return $this->promotionId;
    }
    /**
     * The identifier of the promotion.
     *
     * @param string $promotionId
     *
     * @return self
     */
    public function setPromotionId(string $promotionId) : self
    {
        $this->promotionId = $promotionId;
        return $this;
    }
    /**
     * The title of the promotion.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the promotion.
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
     * The starting date and time of the promotion.
     *
     * @return \DateTime
     */
    public function getStartDateTime() : \DateTime
    {
        return $this->startDateTime;
    }
    /**
     * The starting date and time of the promotion.
     *
     * @param \DateTime $startDateTime
     *
     * @return self
     */
    public function setStartDateTime(\DateTime $startDateTime) : self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }
    /**
     * The ending date and time of the promotion.
     *
     * @return \DateTime
     */
    public function getEndDateTime() : \DateTime
    {
        return $this->endDateTime;
    }
    /**
     * The ending date and time of the promotion.
     *
     * @param \DateTime $endDateTime
     *
     * @return self
     */
    public function setEndDateTime(\DateTime $endDateTime) : self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getCountries() : array
    {
        return $this->countries;
    }
    /**
     * 
     *
     * @param object[] $countries
     *
     * @return self
     */
    public function setCountries(array $countries) : self
    {
        $this->countries = $countries;
        return $this;
    }
    /**
     * The type of the promotion.
     *
     * @return string
     */
    public function getPromotionType() : string
    {
        return $this->promotionType;
    }
    /**
     * The type of the promotion.
     *
     * @param string $promotionType
     *
     * @return self
     */
    public function setPromotionType(string $promotionType) : self
    {
        $this->promotionType = $promotionType;
        return $this;
    }
    /**
     * Indicates whether the promotion is retailer specific or open to the platform.
     *
     * @return bool
     */
    public function getRetailerSpecificPromotion() : bool
    {
        return $this->retailerSpecificPromotion;
    }
    /**
     * Indicates whether the promotion is retailer specific or open to the platform.
     *
     * @param bool $retailerSpecificPromotion
     *
     * @return self
     */
    public function setRetailerSpecificPromotion(bool $retailerSpecificPromotion) : self
    {
        $this->retailerSpecificPromotion = $retailerSpecificPromotion;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getCampaign()
    {
        return $this->campaign;
    }
    /**
     * 
     *
     * @param object $campaign
     *
     * @return self
     */
    public function setCampaign($campaign) : self
    {
        $this->campaign = $campaign;
        return $this;
    }
}