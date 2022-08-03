<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class StateTransition
{
    /**
     * Indicates the state of this replenishment order.
     *
     * @var string
     */
    protected $state;
    /**
     * The date and time in ISO 8601 format that indicates when this states was updated for this replenishment.
     *
     * @var \DateTime
     */
    protected $stateDateTime;
    /**
     * Indicates the state of this replenishment order.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * Indicates the state of this replenishment order.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * The date and time in ISO 8601 format that indicates when this states was updated for this replenishment.
     *
     * @return \DateTime
     */
    public function getStateDateTime() : \DateTime
    {
        return $this->stateDateTime;
    }
    /**
     * The date and time in ISO 8601 format that indicates when this states was updated for this replenishment.
     *
     * @param \DateTime $stateDateTime
     *
     * @return self
     */
    public function setStateDateTime(\DateTime $stateDateTime) : self
    {
        $this->stateDateTime = $stateDateTime;
        return $this;
    }
}