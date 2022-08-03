<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class SubscriptionResponse
{
    /**
     * A unique identifier for the subscription.
     *
     * @var string
     */
    protected $id;
    /**
     * Type of event.
     *
     * @var string[]
     */
    protected $resources;
    /**
     * URL to receive this WebHook notification.
     *
     * @var string
     */
    protected $url;
    /**
     * A unique identifier for the subscription.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * A unique identifier for the subscription.
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
     * Type of event.
     *
     * @return string[]
     */
    public function getResources() : array
    {
        return $this->resources;
    }
    /**
     * Type of event.
     *
     * @param string[] $resources
     *
     * @return self
     */
    public function setResources(array $resources) : self
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * URL to receive this WebHook notification.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * URL to receive this WebHook notification.
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
}