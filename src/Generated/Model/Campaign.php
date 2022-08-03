<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Campaign
{
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
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the campaign under which the promotion had been created.
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
     * The starting date and time of the campaign.
     *
     * @return \DateTime
     */
    public function getStartDateTime() : \DateTime
    {
        return $this->startDateTime;
    }
    /**
     * The starting date and time of the campaign.
     *
     * @param \DateTime $startDateTime
     *
     * @return self
     */
    public function setStartDateTime(\DateTime $startDateTime) : self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }
    /**
     * The ending date and time of the campaign.
     *
     * @return \DateTime
     */
    public function getEndDateTime() : \DateTime
    {
        return $this->endDateTime;
    }
    /**
     * The ending date and time of the campaign.
     *
     * @param \DateTime $endDateTime
     *
     * @return self
     */
    public function setEndDateTime(\DateTime $endDateTime) : self
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }
}