<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class UploadReportAttribute
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
     * The processing state of the submitted attribute.
     *
     * @var string
     */
    protected $status;
    /**
     * The reason code explaining why the value was rejected.
     *
     * @var string
     */
    protected $subStatus;
    /**
     * The reason explaining why the value was rejected.
     *
     * @var string
     */
    protected $subStatusDescription;
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
    /**
     * The processing state of the submitted attribute.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The processing state of the submitted attribute.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The reason code explaining why the value was rejected.
     *
     * @return string
     */
    public function getSubStatus() : string
    {
        return $this->subStatus;
    }
    /**
     * The reason code explaining why the value was rejected.
     *
     * @param string $subStatus
     *
     * @return self
     */
    public function setSubStatus(string $subStatus) : self
    {
        $this->subStatus = $subStatus;
        return $this;
    }
    /**
     * The reason explaining why the value was rejected.
     *
     * @return string
     */
    public function getSubStatusDescription() : string
    {
        return $this->subStatusDescription;
    }
    /**
     * The reason explaining why the value was rejected.
     *
     * @param string $subStatusDescription
     *
     * @return self
     */
    public function setSubStatusDescription(string $subStatusDescription) : self
    {
        $this->subStatusDescription = $subStatusDescription;
        return $this;
    }
}