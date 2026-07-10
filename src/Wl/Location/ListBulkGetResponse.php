<?php

namespace WlSdk\Wl\Location;

/**
 * Response from GET
 */
class ListBulkGetResponse
{
    /**
     * Short-form information about locations.
     *
     * Keys refer to location primary keys. Values refer to sub-arrays with the next keys:
     *
     * @var array|null
     */
    public ?array $a_location = null;

    /**
     * A list of models with full information about each location.
     *
     * @var array|null
     */
    public ?array $a_location_full = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->a_location_full = isset($data['a_location_full']) ? (array)$data['a_location_full'] : null;
    }
}
