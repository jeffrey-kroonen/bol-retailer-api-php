<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReducedInvalidReplenishmentLine
{
    /**
     * Type of invalid replenishment line, in case the BSKU and/or EAN cannot be determined for this replenishment line.
     *
     * @var string
     */
    protected $type;
    /**
     * Type of invalid replenishment line, in case the BSKU and/or EAN cannot be determined for this replenishment line.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Type of invalid replenishment line, in case the BSKU and/or EAN cannot be determined for this replenishment line.
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
}