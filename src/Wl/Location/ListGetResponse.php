<?php

namespace WlSdk\Wl\Location;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * Information about the business's location(s). If you've specified multiple businesses for this endpoint,
     * this will
     * return location information for multiple businesses. Keys refer to location keys. Values refer to nested
     * arrays with the next keys:
     *
     * @var array|null
     */
    public ?array $a_location = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
    }
}
