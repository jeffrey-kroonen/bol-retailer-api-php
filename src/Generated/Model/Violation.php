<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Violation
{
    /**
     * Describes the origin of the error, for instance a field or query parameter validation error.
     *
     * @var string
     */
    protected $name;
    /**
     * Detailed description of the validation error that caused the problem.
     *
     * @var string
     */
    protected $reason;
    /**
     * Describes the origin of the error, for instance a field or query parameter validation error.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Describes the origin of the error, for instance a field or query parameter validation error.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Detailed description of the validation error that caused the problem.
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * Detailed description of the validation error that caused the problem.
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->reason = $reason;
        return $this;
    }
}