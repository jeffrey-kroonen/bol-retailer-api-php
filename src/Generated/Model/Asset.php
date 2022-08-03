<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Asset
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
}