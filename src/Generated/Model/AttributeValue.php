<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class AttributeValue
{
    /**
     * The value of the attribute.
     *
     * @var string
     */
    protected $value;
    /**
     * The unit identifier of the attribute.
     *
     * @var string
     */
    protected $unitId;
    /**
     * The value of the attribute.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The value of the attribute.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * The unit identifier of the attribute.
     *
     * @return string
     */
    public function getUnitId() : string
    {
        return $this->unitId;
    }
    /**
     * The unit identifier of the attribute.
     *
     * @param string $unitId
     *
     * @return self
     */
    public function setUnitId(string $unitId) : self
    {
        $this->unitId = $unitId;
        return $this;
    }
}