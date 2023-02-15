<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Values
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
     * The identifier of the attribute's value.
     *
     * @var string
     */
    protected $valueId;

    /**
     * The value of the attribute.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * The value of the attribute.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * The unit identifier of the attribute.
     */
    public function getUnitId(): string
    {
        return $this->unitId;
    }

    /**
     * The unit identifier of the attribute.
     */
    public function setUnitId(string $unitId): self
    {
        $this->initialized['unitId'] = true;
        $this->unitId = $unitId;

        return $this;
    }

    /**
     * The identifier of the attribute's value.
     */
    public function getValueId(): string
    {
        return $this->valueId;
    }

    /**
     * The identifier of the attribute's value.
     */
    public function setValueId(string $valueId): self
    {
        $this->initialized['valueId'] = true;
        $this->valueId = $valueId;

        return $this;
    }
}