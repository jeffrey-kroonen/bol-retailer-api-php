<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class RequestProductDestinationsRequest
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
     * @var Ean[]
     */
    protected $eans;

    /**
     * @return Ean[]
     */
    public function getEans(): array
    {
        return $this->eans;
    }

    /**
     * @param Ean[] $eans
     */
    public function setEans(array $eans): self
    {
        $this->initialized['eans'] = true;
        $this->eans = $eans;

        return $this;
    }
}
