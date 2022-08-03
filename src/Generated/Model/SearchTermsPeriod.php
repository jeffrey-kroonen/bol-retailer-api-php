<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class SearchTermsPeriod
{
    /**
     * Day number in the ISO-8601 standard.
     *
     * @var string
     */
    protected $day;
    /**
     * Week number in the ISO-8601 standard.
     *
     * @var string
     */
    protected $week;
    /**
     * Month number in the ISO-8601 standard.
     *
     * @var string
     */
    protected $month;
    /**
     * Year number in the ISO-8601 standard.
     *
     * @var string
     */
    protected $year;
    /**
     * Day number in the ISO-8601 standard.
     *
     * @return string
     */
    public function getDay() : string
    {
        return $this->day;
    }
    /**
     * Day number in the ISO-8601 standard.
     *
     * @param string $day
     *
     * @return self
     */
    public function setDay(string $day) : self
    {
        $this->day = $day;
        return $this;
    }
    /**
     * Week number in the ISO-8601 standard.
     *
     * @return string
     */
    public function getWeek() : string
    {
        return $this->week;
    }
    /**
     * Week number in the ISO-8601 standard.
     *
     * @param string $week
     *
     * @return self
     */
    public function setWeek(string $week) : self
    {
        $this->week = $week;
        return $this;
    }
    /**
     * Month number in the ISO-8601 standard.
     *
     * @return string
     */
    public function getMonth() : string
    {
        return $this->month;
    }
    /**
     * Month number in the ISO-8601 standard.
     *
     * @param string $month
     *
     * @return self
     */
    public function setMonth(string $month) : self
    {
        $this->month = $month;
        return $this;
    }
    /**
     * Year number in the ISO-8601 standard.
     *
     * @return string
     */
    public function getYear() : string
    {
        return $this->year;
    }
    /**
     * Year number in the ISO-8601 standard.
     *
     * @param string $year
     *
     * @return self
     */
    public function setYear(string $year) : self
    {
        $this->year = $year;
        return $this;
    }
}