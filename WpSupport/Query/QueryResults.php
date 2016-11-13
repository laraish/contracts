<?php

namespace Laraish\Contracts\WpSupport\Query;

interface QueryResults
{
    /**
     * Get the pagination of the query results.
     * @param array $options
     *
     * @return \Laraish\Contracts\Pagination\Paginator
     */
    public function getPagination(array $options = []);

    /**
     * Convert to Collection object.
     * @return \Illuminate\Support\Collection
     */
    public function toCollection();
}