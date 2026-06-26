<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Response from GET
 */
class BookableListGetResponse
{
    /**
     * List of bookable items.
     *
     * @var BookableListGetResponseBookable[]|null
     */
    public ?array $a_bookable = null;

    /**
     * Pagination information. See Pagination.
     *
     * @var array|null
     */
    public ?array $a_pagination = null;

    public function __construct(array $data)
    {
        $this->a_bookable = isset($data['a_bookable']) ? array_map(static fn ($item) => new BookableListGetResponseBookable((array)$item), (array)$data['a_bookable']) : null;
        $this->a_pagination = isset($data['a_pagination']) ? (array)$data['a_pagination'] : null;
    }
}
