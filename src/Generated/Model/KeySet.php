<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class KeySet
{
    /**
     * Key identifier. Maps to the keyId value in the signature header of the push request.
     *
     * @var string
     */
    protected $id;
    /**
     * Key encryption type.
     *
     * @var string
     */
    protected $type;
    /**
     * The Base64 encoded public key to use when verifying the signature.
     *
     * @var string
     */
    protected $publicKey;
    /**
     * Key identifier. Maps to the keyId value in the signature header of the push request.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Key identifier. Maps to the keyId value in the signature header of the push request.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Key encryption type.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Key encryption type.
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
     * The Base64 encoded public key to use when verifying the signature.
     *
     * @return string
     */
    public function getPublicKey() : string
    {
        return $this->publicKey;
    }
    /**
     * The Base64 encoded public key to use when verifying the signature.
     *
     * @param string $publicKey
     *
     * @return self
     */
    public function setPublicKey(string $publicKey) : self
    {
        $this->publicKey = $publicKey;
        return $this;
    }
}