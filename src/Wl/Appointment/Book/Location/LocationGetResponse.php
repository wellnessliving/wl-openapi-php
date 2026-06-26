<?php

namespace WlSdk\Wl\Appointment\Book\Location;

/**
 * Response from GET
 */
class LocationGetResponse
{
    /**
     * A list of business locations with information about them.
     *
     * @var array|null
     */
    public ?array $a_location = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
    }
}
