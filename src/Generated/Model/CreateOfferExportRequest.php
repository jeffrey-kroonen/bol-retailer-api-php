<?php

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class CreateOfferExportRequest
{
    /**
     * The file format in which to return the export.
     *
     * @var string
     */
    protected $format;
    /**
     * The file format in which to return the export.
     *
     * @return string
     */
    public function getFormat() : string
    {
        return $this->format;
    }
    /**
     * The file format in which to return the export.
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format) : self
    {
        $this->format = $format;
        return $this;
    }
}