<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class SearchTerms
{
    /**
     * 
     *
     * @var object
     */
    protected $searchTerms;
    /**
     * 
     *
     * @return object
     */
    public function getSearchTerms()
    {
        return $this->searchTerms;
    }
    /**
     * 
     *
     * @param object $searchTerms
     *
     * @return self
     */
    public function setSearchTerms($searchTerms) : self
    {
        $this->searchTerms = $searchTerms;
        return $this;
    }
}