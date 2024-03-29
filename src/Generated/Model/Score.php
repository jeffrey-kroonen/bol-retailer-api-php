<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class Score
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
     * Indicates whether the score conforms to the bol.com service norm or not.
     *
     * @var bool
     */
    protected $conforms;
    /**
     * The top part of the fraction (above the line). This usually is the smaller number compared to the denominator.
     *
     * @var int
     */
    protected $numerator;
    /**
     * The lower part of the fraction (below the line). This usually is the larger number compared to the the numerator.
     *
     * @var int
     */
    protected $denominator;
    /**
     * The score for this measurement (denominator divided by the numerator).
     *
     * @var float
     */
    protected $value;
    /**
     * The difference between the score and the bol.com service norm.
     *
     * @var float
     */
    protected $distanceToNorm;

    /**
     * Indicates whether the score conforms to the bol.com service norm or not.
     */
    public function getConforms(): bool
    {
        return $this->conforms;
    }

    /**
     * Indicates whether the score conforms to the bol.com service norm or not.
     */
    public function setConforms(bool $conforms): self
    {
        $this->initialized['conforms'] = true;
        $this->conforms = $conforms;

        return $this;
    }

    /**
     * The top part of the fraction (above the line). This usually is the smaller number compared to the denominator.
     */
    public function getNumerator(): int
    {
        return $this->numerator;
    }

    /**
     * The top part of the fraction (above the line). This usually is the smaller number compared to the denominator.
     */
    public function setNumerator(int $numerator): self
    {
        $this->initialized['numerator'] = true;
        $this->numerator = $numerator;

        return $this;
    }

    /**
     * The lower part of the fraction (below the line). This usually is the larger number compared to the the numerator.
     */
    public function getDenominator(): int
    {
        return $this->denominator;
    }

    /**
     * The lower part of the fraction (below the line). This usually is the larger number compared to the the numerator.
     */
    public function setDenominator(int $denominator): self
    {
        $this->initialized['denominator'] = true;
        $this->denominator = $denominator;

        return $this;
    }

    /**
     * The score for this measurement (denominator divided by the numerator).
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * The score for this measurement (denominator divided by the numerator).
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * The difference between the score and the bol.com service norm.
     */
    public function getDistanceToNorm(): float
    {
        return $this->distanceToNorm;
    }

    /**
     * The difference between the score and the bol.com service norm.
     */
    public function setDistanceToNorm(float $distanceToNorm): self
    {
        $this->initialized['distanceToNorm'] = true;
        $this->distanceToNorm = $distanceToNorm;

        return $this;
    }
}
