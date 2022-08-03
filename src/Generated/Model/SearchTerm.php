<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class SearchTerm
{
    /**
     * The search term for which you requested the search volume.
     *
     * @var string
     */
    protected $searchTerm;
    /**
     * Interpretation of the data that applies to this measurement.
     *
     * @var string
     */
    protected $type;
    /**
     * The number of customer visits on the search page.
     *
     * @var int
     */
    protected $total;
    /**
     * 
     *
     * @var object[]
     */
    protected $countries;
    /**
     * 
     *
     * @var object[]
     */
    protected $periods;
    /**
     * 
     *
     * @var object[]
     */
    protected $relatedSearchTerms;
    /**
     * The search term for which you requested the search volume.
     *
     * @return string
     */
    public function getSearchTerm() : string
    {
        return $this->searchTerm;
    }
    /**
     * The search term for which you requested the search volume.
     *
     * @param string $searchTerm
     *
     * @return self
     */
    public function setSearchTerm(string $searchTerm) : self
    {
        $this->searchTerm = $searchTerm;
        return $this;
    }
    /**
     * Interpretation of the data that applies to this measurement.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Interpretation of the data that applies to this measurement.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * The number of customer visits on the search page.
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * The number of customer visits on the search page.
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->total = $total;
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
     * 
     *
     * @return object[]
     */
    public function getPeriods() : array
    {
        return $this->periods;
    }
    /**
     * 
     *
     * @param object[] $periods
     *
     * @return self
     */
    public function setPeriods(array $periods) : self
    {
        $this->periods = $periods;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getRelatedSearchTerms() : array
    {
        return $this->relatedSearchTerms;
    }
    /**
     * 
     *
     * @param object[] $relatedSearchTerms
     *
     * @return self
     */
    public function setRelatedSearchTerms(array $relatedSearchTerms) : self
    {
        $this->relatedSearchTerms = $relatedSearchTerms;
        return $this;
    }
}