<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Response from GET
 */
class AvailabilityListGetResponse
{
    /**
     * List of availabilities.
     *
     * @var AvailabilityListGetResponseAvailability[]|null
     */
    public ?array $a_availability = null;

    /**
     * Pagination information. See Pagination.
     *
     * @var array|null
     */
    public ?array $a_pagination = null;

    public function __construct(array $data)
    {
        $this->a_availability = isset($data['a_availability']) ? array_map(static fn ($item) => new AvailabilityListGetResponseAvailability((array)$item), (array)$data['a_availability']) : null;
        $this->a_pagination = isset($data['a_pagination']) ? (array)$data['a_pagination'] : null;
    }
}
