<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class KeySetResponse
{
    /**
     * 
     *
     * @var object[]
     */
    protected $signatureKeys;
    /**
     * 
     *
     * @return object[]
     */
    public function getSignatureKeys() : array
    {
        return $this->signatureKeys;
    }
    /**
     * 
     *
     * @param object[] $signatureKeys
     *
     * @return self
     */
    public function setSignatureKeys(array $signatureKeys) : self
    {
        $this->signatureKeys = $signatureKeys;
        return $this;
    }
}