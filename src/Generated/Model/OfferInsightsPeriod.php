<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OfferInsightsPeriod
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
     * Day of the month.
     *
     * @var int
     */
    protected $day;
    /**
     * Week of the year.
     *
     * @var int
     */
    protected $week;
    /**
     * Month of the year.
     *
     * @var int
     */
    protected $month;
    /**
     * Year.
     *
     * @var int
     */
    protected $year;

    /**
     * Day of the month.
     */
    public function getDay(): int
    {
        return $this->day;
    }

    /**
     * Day of the month.
     */
    public function setDay(int $day): self
    {
        $this->initialized['day'] = true;
        $this->day = $day;

        return $this;
    }

    /**
     * Week of the year.
     */
    public function getWeek(): int
    {
        return $this->week;
    }

    /**
     * Week of the year.
     */
    public function setWeek(int $week): self
    {
        $this->initialized['week'] = true;
        $this->week = $week;

        return $this;
    }

    /**
     * Month of the year.
     */
    public function getMonth(): int
    {
        return $this->month;
    }

    /**
     * Month of the year.
     */
    public function setMonth(int $month): self
    {
        $this->initialized['month'] = true;
        $this->month = $month;

        return $this;
    }

    /**
     * Year.
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * Year.
     */
    public function setYear(int $year): self
    {
        $this->initialized['year'] = true;
        $this->year = $year;

        return $this;
    }
}
