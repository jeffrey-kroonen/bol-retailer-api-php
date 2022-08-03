<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Attribute
{
    /**
     * The identifier of the attribute for which the value has changed.
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var object[]
     */
    protected $values;
    /**
     * The identifier of the attribute for which the value has changed.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The identifier of the attribute for which the value has changed.
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
     * 
     *
     * @return object[]
     */
    public function getValues() : array
    {
        return $this->values;
    }
    /**
     * 
     *
     * @param object[] $values
     *
     * @return self
     */
    public function setValues(array $values) : self
    {
        $this->values = $values;
        return $this;
    }
}