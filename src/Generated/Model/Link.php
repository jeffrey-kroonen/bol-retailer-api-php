<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Link
{
    /**
     * The link relation.
     *
     * @var string
     */
    protected $rel;
    /**
     * The URI for the resource linked to.
     *
     * @var string
     */
    protected $href;
    /**
     * The HTTP method to use when accessing the link.
     *
     * @var string
     */
    protected $method;
    /**
     * The link relation.
     *
     * @return string
     */
    public function getRel() : string
    {
        return $this->rel;
    }
    /**
     * The link relation.
     *
     * @param string $rel
     *
     * @return self
     */
    public function setRel(string $rel) : self
    {
        $this->rel = $rel;
        return $this;
    }
    /**
     * The URI for the resource linked to.
     *
     * @return string
     */
    public function getHref() : string
    {
        return $this->href;
    }
    /**
     * The URI for the resource linked to.
     *
     * @param string $href
     *
     * @return self
     */
    public function setHref(string $href) : self
    {
        $this->href = $href;
        return $this;
    }
    /**
     * The HTTP method to use when accessing the link.
     *
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method;
    }
    /**
     * The HTTP method to use when accessing the link.
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method) : self
    {
        $this->method = $method;
        return $this;
    }
}