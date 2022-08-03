<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ReducedReplenishment
{
    /**
     * The unique identifier of the replenishment.
     *
     * @var string
     */
    protected $replenishmentId;
    /**
     * Custom user defined reference to identify the replenishment.
     *
     * @var string
     */
    protected $reference;
    /**
     * The date and time when this replenishment was created. In ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $creationDateTime;
    /**
     * 
     *
     * @var object[]
     */
    protected $lines;
    /**
     * 
     *
     * @var object[]
     */
    protected $invalidLines;
    /**
     * The unique identifier of the replenishment.
     *
     * @return string
     */
    public function getReplenishmentId() : string
    {
        return $this->replenishmentId;
    }
    /**
     * The unique identifier of the replenishment.
     *
     * @param string $replenishmentId
     *
     * @return self
     */
    public function setReplenishmentId(string $replenishmentId) : self
    {
        $this->replenishmentId = $replenishmentId;
        return $this;
    }
    /**
     * Custom user defined reference to identify the replenishment.
     *
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }
    /**
     * Custom user defined reference to identify the replenishment.
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(string $reference) : self
    {
        $this->reference = $reference;
        return $this;
    }
    /**
     * The date and time when this replenishment was created. In ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getCreationDateTime() : \DateTime
    {
        return $this->creationDateTime;
    }
    /**
     * The date and time when this replenishment was created. In ISO 8601 format.
     *
     * @param \DateTime $creationDateTime
     *
     * @return self
     */
    public function setCreationDateTime(\DateTime $creationDateTime) : self
    {
        $this->creationDateTime = $creationDateTime;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getLines() : array
    {
        return $this->lines;
    }
    /**
     * 
     *
     * @param object[] $lines
     *
     * @return self
     */
    public function setLines(array $lines) : self
    {
        $this->lines = $lines;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getInvalidLines() : array
    {
        return $this->invalidLines;
    }
    /**
     * 
     *
     * @param object[] $invalidLines
     *
     * @return self
     */
    public function setInvalidLines(array $invalidLines) : self
    {
        $this->invalidLines = $invalidLines;
        return $this;
    }
}