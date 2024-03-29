<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Attribute
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
     * The identifier of the attribute for which the value has changed.
     *
     * @var string
     */
    protected $id;
    /**
     * @var AttributeValue[]
     */
    protected $values;

    /**
     * The identifier of the attribute for which the value has changed.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The identifier of the attribute for which the value has changed.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * @return AttributeValue[]
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * @param AttributeValue[] $values
     */
    public function setValues(array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;

        return $this;
    }
}
