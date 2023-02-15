<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class AudioTracks
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
     * The disc number within an album the audio track is stored on.
     *
     * @var string
     */
    protected $discNumber;
    /**
     * The track number on the album.
     *
     * @var string
     */
    protected $trackNumber;
    /**
     * The disc side on which the audio track is stored on.
     *
     * @var string
     */
    protected $discSide;
    /**
     * The title of the audio track.
     *
     * @var string
     */
    protected $title;
    /**
     * The name of the artist(s) performing the audio track.
     *
     * @var string
     */
    protected $artistName;
    /**
     * The play time of the audio track.
     *
     * @var string
     */
    protected $playTime;
    /**
     * The URL on which an audio clip of the audio track has been made available.
     *
     * @var string
     */
    protected $clipUrl;
    /**
     * The format in which the audio clip is available.
     *
     * @var string
     */
    protected $clipType;

    /**
     * The disc number within an album the audio track is stored on.
     */
    public function getDiscNumber(): string
    {
        return $this->discNumber;
    }

    /**
     * The disc number within an album the audio track is stored on.
     */
    public function setDiscNumber(string $discNumber): self
    {
        $this->initialized['discNumber'] = true;
        $this->discNumber = $discNumber;

        return $this;
    }

    /**
     * The track number on the album.
     */
    public function getTrackNumber(): string
    {
        return $this->trackNumber;
    }

    /**
     * The track number on the album.
     */
    public function setTrackNumber(string $trackNumber): self
    {
        $this->initialized['trackNumber'] = true;
        $this->trackNumber = $trackNumber;

        return $this;
    }

    /**
     * The disc side on which the audio track is stored on.
     */
    public function getDiscSide(): string
    {
        return $this->discSide;
    }

    /**
     * The disc side on which the audio track is stored on.
     */
    public function setDiscSide(string $discSide): self
    {
        $this->initialized['discSide'] = true;
        $this->discSide = $discSide;

        return $this;
    }

    /**
     * The title of the audio track.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * The title of the audio track.
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * The name of the artist(s) performing the audio track.
     */
    public function getArtistName(): string
    {
        return $this->artistName;
    }

    /**
     * The name of the artist(s) performing the audio track.
     */
    public function setArtistName(string $artistName): self
    {
        $this->initialized['artistName'] = true;
        $this->artistName = $artistName;

        return $this;
    }

    /**
     * The play time of the audio track.
     */
    public function getPlayTime(): string
    {
        return $this->playTime;
    }

    /**
     * The play time of the audio track.
     */
    public function setPlayTime(string $playTime): self
    {
        $this->initialized['playTime'] = true;
        $this->playTime = $playTime;

        return $this;
    }

    /**
     * The URL on which an audio clip of the audio track has been made available.
     */
    public function getClipUrl(): string
    {
        return $this->clipUrl;
    }

    /**
     * The URL on which an audio clip of the audio track has been made available.
     */
    public function setClipUrl(string $clipUrl): self
    {
        $this->initialized['clipUrl'] = true;
        $this->clipUrl = $clipUrl;

        return $this;
    }

    /**
     * The format in which the audio clip is available.
     */
    public function getClipType(): string
    {
        return $this->clipType;
    }

    /**
     * The format in which the audio clip is available.
     */
    public function setClipType(string $clipType): self
    {
        $this->initialized['clipType'] = true;
        $this->clipType = $clipType;

        return $this;
    }
}
