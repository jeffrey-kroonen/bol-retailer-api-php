<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class ChunkRecommendationsPrediction
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
     * The identifier of the predicted GPC/Product Classification.
     *
     * @var string
     */
    protected $chunkId;
    /**
     * The probability of the predicted chunk as a ratio, with eleven decimals of precision.
     *
     * @var float
     */
    protected $probability;

    /**
     * The identifier of the predicted GPC/Product Classification.
     */
    public function getChunkId(): string
    {
        return $this->chunkId;
    }

    /**
     * The identifier of the predicted GPC/Product Classification.
     */
    public function setChunkId(string $chunkId): self
    {
        $this->initialized['chunkId'] = true;
        $this->chunkId = $chunkId;

        return $this;
    }

    /**
     * The probability of the predicted chunk as a ratio, with eleven decimals of precision.
     */
    public function getProbability(): float
    {
        return $this->probability;
    }

    /**
     * The probability of the predicted chunk as a ratio, with eleven decimals of precision.
     */
    public function setProbability(float $probability): self
    {
        $this->initialized['probability'] = true;
        $this->probability = $probability;

        return $this;
    }
}
