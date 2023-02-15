<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JeffreyKroonen\BolRetailer\Generated\Model;

class SearchTerm
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
     * The search term for which you requested the search volume.
     *
     * @var string
     */
    protected $searchTerm;
    /**
     * Interpretation of the data that applies to this measurement.
     *
     * @var string
     */
    protected $type;
    /**
     * The number of customer visits on the search page.
     *
     * @var int
     */
    protected $total;
    /**
     * @var SearchTermsCountry[]
     */
    protected $countries;
    /**
     * @var TotalPeriod[]
     */
    protected $periods;
    /**
     * @var RelatedSearchTerm[]
     */
    protected $relatedSearchTerms;

    /**
     * The search term for which you requested the search volume.
     */
    public function getSearchTerm(): string
    {
        return $this->searchTerm;
    }

    /**
     * The search term for which you requested the search volume.
     */
    public function setSearchTerm(string $searchTerm): self
    {
        $this->initialized['searchTerm'] = true;
        $this->searchTerm = $searchTerm;

        return $this;
    }

    /**
     * Interpretation of the data that applies to this measurement.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Interpretation of the data that applies to this measurement.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The number of customer visits on the search page.
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * The number of customer visits on the search page.
     */
    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }

    /**
     * @return SearchTermsCountry[]
     */
    public function getCountries(): array
    {
        return $this->countries;
    }

    /**
     * @param SearchTermsCountry[] $countries
     */
    public function setCountries(array $countries): self
    {
        $this->initialized['countries'] = true;
        $this->countries = $countries;

        return $this;
    }

    /**
     * @return TotalPeriod[]
     */
    public function getPeriods(): array
    {
        return $this->periods;
    }

    /**
     * @param TotalPeriod[] $periods
     */
    public function setPeriods(array $periods): self
    {
        $this->initialized['periods'] = true;
        $this->periods = $periods;

        return $this;
    }

    /**
     * @return RelatedSearchTerm[]
     */
    public function getRelatedSearchTerms(): array
    {
        return $this->relatedSearchTerms;
    }

    /**
     * @param RelatedSearchTerm[] $relatedSearchTerms
     */
    public function setRelatedSearchTerms(array $relatedSearchTerms): self
    {
        $this->initialized['relatedSearchTerms'] = true;
        $this->relatedSearchTerms = $relatedSearchTerms;

        return $this;
    }
}
