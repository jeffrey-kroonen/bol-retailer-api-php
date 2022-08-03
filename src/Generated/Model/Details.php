<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Details
{
    /**
     * 
     *
     * @var object
     */
    protected $period;
    /**
     * The score for this measurement. In case there are no scores for an indicator, this element is omitted from the response.
     *
     * @var object
     */
    protected $score;
    /**
     * 
     *
     * @var object
     */
    protected $norm;
    /**
     * 
     *
     * @return object
     */
    public function getPeriod()
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param object $period
     *
     * @return self
     */
    public function setPeriod($period) : self
    {
        $this->period = $period;
        return $this;
    }
    /**
     * The score for this measurement. In case there are no scores for an indicator, this element is omitted from the response.
     *
     * @return object
     */
    public function getScore()
    {
        return $this->score;
    }
    /**
     * The score for this measurement. In case there are no scores for an indicator, this element is omitted from the response.
     *
     * @param object $score
     *
     * @return self
     */
    public function setScore($score) : self
    {
        $this->score = $score;
        return $this;
    }
    /**
     * 
     *
     * @return object
     */
    public function getNorm()
    {
        return $this->norm;
    }
    /**
     * 
     *
     * @param object $norm
     *
     * @return self
     */
    public function setNorm($norm) : self
    {
        $this->norm = $norm;
        return $this;
    }
}