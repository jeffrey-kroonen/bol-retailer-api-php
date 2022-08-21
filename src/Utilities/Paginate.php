<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Utilities;

class Paginate
{
    /**
     * The data of the current page.
     *
     * @var array<object>
     */
    public array $data = [];

    /**
     * The meta information about the pagination.
     *
     * @var array
     */
    public array $meta = [];

    public function push(object $object): self
    {
        $this->data[] = $object;

        if (isset($this->meta['current_page']) && ! isset($this->meta['next_page'])) {
            $this->meta['next_page'] = $this->meta['current_page'] + 1;
        }

        return $this;
    }

    /**
     * Set the current page and previous/next page when necessary.
     *
     * @param integer $page
     * @return self
     */
    public function setPage(int $page = 1): self
    {
        if ($page > 1) {
            $this->meta['previous_page'] = $page - 1;
        }

        $this->meta['current_page'] = $page;

        if (! empty($this->data)) {
            $this->meta['next_page'] = $page +1;
        }

        return $this;
    }
}
