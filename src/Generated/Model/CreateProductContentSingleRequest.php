<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class CreateProductContentSingleRequest
{
    /**
     * The language in which content is submitted.
     *
     * @var string
     */
    protected $language;
    /**
     * A list of attributes.
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
     * A list of attributes.
     *
     * @return object[]
     */
    public function getAttributes() : array
    {
        return $this->attributes;
    }
    /**
     * A list of attributes.
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