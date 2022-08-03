<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class UploadReportResponse
{
    /**
     * The identifier of the upload report.
     *
     * @var string
     */
    protected $uploadId;
    /**
     * The language in which content is submitted.
     *
     * @var string
     */
    protected $language;
    /**
     * The current status of the upload report.
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var object[]
     */
    protected $attributes;
    /**
     * 
     *
     * @var object[]
     */
    protected $assets;
    /**
     * The identifier of the upload report.
     *
     * @return string
     */
    public function getUploadId() : string
    {
        return $this->uploadId;
    }
    /**
     * The identifier of the upload report.
     *
     * @param string $uploadId
     *
     * @return self
     */
    public function setUploadId(string $uploadId) : self
    {
        $this->uploadId = $uploadId;
        return $this;
    }
    /**
     * The language in which content is submitted.
     *
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }
    /**
     * The language in which content is submitted.
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language) : self
    {
        $this->language = $language;
        return $this;
    }
    /**
     * The current status of the upload report.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The current status of the upload report.
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
     * 
     *
     * @return object[]
     */
    public function getAttributes() : array
    {
        return $this->attributes;
    }
    /**
     * 
     *
     * @param object[] $attributes
     *
     * @return self
     */
    public function setAttributes(array $attributes) : self
    {
        $this->attributes = $attributes;
        return $this;
    }
    /**
     * 
     *
     * @return object[]
     */
    public function getAssets() : array
    {
        return $this->assets;
    }
    /**
     * 
     *
     * @param object[] $assets
     *
     * @return self
     */
    public function setAssets(array $assets) : self
    {
        $this->assets = $assets;
        return $this;
    }
}