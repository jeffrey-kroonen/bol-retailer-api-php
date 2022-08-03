<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class RelevanceScore
{
    /**
     * The country for which the relevance score has been calculated against.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The calculated relevance score for the product.
     *
     * @var int
     */
    protected $relevanceScore;
    /**
     * The country for which the relevance score has been calculated against.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * The country for which the relevance score has been calculated against.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * The calculated relevance score for the product.
     *
     * @return int
     */
    public function getRelevanceScore() : int
    {
        return $this->relevanceScore;
    }
    /**
     * The calculated relevance score for the product.
     *
     * @param int $relevanceScore
     *
     * @return self
     */
    public function setRelevanceScore(int $relevanceScore) : self
    {
        $this->relevanceScore = $relevanceScore;
        return $this;
    }
}