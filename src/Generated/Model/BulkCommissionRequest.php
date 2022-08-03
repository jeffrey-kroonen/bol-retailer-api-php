<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class BulkCommissionRequest
{
    /**
     * 
     *
     * @var object[]
     */
    protected $commissionQueries;
    /**
     * 
     *
     * @return object[]
     */
    public function getCommissionQueries() : array
    {
        return $this->commissionQueries;
    }
    /**
     * 
     *
     * @param object[] $commissionQueries
     *
     * @return self
     */
    public function setCommissionQueries(array $commissionQueries) : self
    {
        $this->commissionQueries = $commissionQueries;
        return $this;
    }
}