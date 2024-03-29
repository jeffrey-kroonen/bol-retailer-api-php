<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Campaign
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
     * The name of the campaign under which the promotion had been created.
     *
     * @var string
     */
    protected $name;
    /**
     * The starting date and time of the campaign.
     *
     * @var \DateTime
     */
    protected $startDateTime;
    /**
     * The ending date and time of the campaign.
     *
     * @var \DateTime
     */
    protected $endDateTime;

    /**
     * The name of the campaign under which the promotion had been created.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the campaign under which the promotion had been created.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The starting date and time of the campaign.
     */
    public function getStartDateTime(): \DateTime
    {
        return $this->startDateTime;
    }

    /**
     * The starting date and time of the campaign.
     */
    public function setStartDateTime(\DateTime $startDateTime): self
    {
        $this->initialized['startDateTime'] = true;
        $this->startDateTime = $startDateTime;

        return $this;
    }

    /**
     * The ending date and time of the campaign.
     */
    public function getEndDateTime(): \DateTime
    {
        return $this->endDateTime;
    }

    /**
     * The ending date and time of the campaign.
     */
    public function setEndDateTime(\DateTime $endDateTime): self
    {
        $this->initialized['endDateTime'] = true;
        $this->endDateTime = $endDateTime;

        return $this;
    }
}
