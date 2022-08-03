<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class OfferInsightsPeriod
{
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
     *
     * @return int
     */
    public function getDay() : int
    {
        return $this->day;
    }
    /**
     * Day of the month.
     *
     * @param int $day
     *
     * @return self
     */
    public function setDay(int $day) : self
    {
        $this->day = $day;
        return $this;
    }
    /**
     * Week of the year.
     *
     * @return int
     */
    public function getWeek() : int
    {
        return $this->week;
    }
    /**
     * Week of the year.
     *
     * @param int $week
     *
     * @return self
     */
    public function setWeek(int $week) : self
    {
        $this->week = $week;
        return $this;
    }
    /**
     * Month of the year.
     *
     * @return int
     */
    public function getMonth() : int
    {
        return $this->month;
    }
    /**
     * Month of the year.
     *
     * @param int $month
     *
     * @return self
     */
    public function setMonth(int $month) : self
    {
        $this->month = $month;
        return $this;
    }
    /**
     * Year.
     *
     * @return int
     */
    public function getYear() : int
    {
        return $this->year;
    }
    /**
     * Year.
     *
     * @param int $year
     *
     * @return self
     */
    public function setYear(int $year) : self
    {
        $this->year = $year;
        return $this;
    }
}