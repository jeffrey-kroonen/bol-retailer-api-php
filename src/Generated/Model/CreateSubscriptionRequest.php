<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class CreateSubscriptionRequest
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
     * Type of event.
     *
     * @return string[]
     */
    public function getResources(): array
    {
        return $this->resources;
    }

    /**
     * Type of event.
     *
     * @param string[] $resources
     */
    public function setResources(array $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;

        return $this;
    }

    /**
     * URL to receive this WebHook notification.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * URL to receive this WebHook notification.
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }
}
