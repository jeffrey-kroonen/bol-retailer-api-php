<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class UploadReportAsset
{
    /**
     * The URL of the asset.
     *
     * @var string
     */
    protected $url;
    /**
     * The label(s) of the asset.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * The processing state of the submitted asset.
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
     * The URL of the asset.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The URL of the asset.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * The label(s) of the asset.
     *
     * @return string[]
     */
    public function getLabels() : array
    {
        return $this->labels;
    }
    /**
     * The label(s) of the asset.
     *
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(array $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * The processing state of the submitted asset.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The processing state of the submitted asset.
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