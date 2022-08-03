<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class BulkCommissionResponse
{
    /**
     * 
     *
     * @var object[]
     */
    protected $commissions;
    /**
     * 
     *
     * @return object[]
     */
    public function getCommissions() : array
    {
        return $this->commissions;
    }
    /**
     * 
     *
     * @param object[] $commissions
     *
     * @return self
     */
    public function setCommissions(array $commissions) : self
    {
        $this->commissions = $commissions;
        return $this;
    }
}