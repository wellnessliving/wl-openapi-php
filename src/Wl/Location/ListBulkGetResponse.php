<?php

namespace WlSdk\Wl\Location;

/**
 * Response from GET
 */
class ListBulkGetResponse
{
    /**
     * No description.
     *
     * @var ListBulkGetResponseLocation[]|null
     */
    public ?array $a_location = null;

    /**
     * No description.
     *
     * @var ListBulkGetResponseLocationFull[]|null
     */
    public ?array $a_location_full = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? array_map(static fn ($item) => new ListBulkGetResponseLocation((array)$item), (array)$data['a_location']) : null;
        $this->a_location_full = isset($data['a_location_full']) ? array_map(static fn ($item) => new ListBulkGetResponseLocationFull((array)$item), (array)$data['a_location_full']) : null;
    }
}
