<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class PerformanceIndicatorPeriod
{
    /**
     * Week number in the ISO-8601 standard.
     *
     * @var string
     */
    protected $week;
    /**
     * Year number in the ISO-8601 standard.
     *
     * @var string
     */
    protected $year;
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