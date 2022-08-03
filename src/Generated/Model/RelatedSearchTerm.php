<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class RelatedSearchTerm
{
    /**
     * The number of customer visits on the search page.
     *
     * @var int
     */
    protected $total;
    /**
     * The search term for which you requested the search volume.
     *
     * @var string
     */
    protected $searchTerm;
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
}