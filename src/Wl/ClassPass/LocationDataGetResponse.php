<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Response from GET
 */
class LocationDataGetResponse
{
    /**
     * See LocationData::toClassPass() for documentation.
     *
     * @var array|null
     */
    public ?array $a_venue = null;

    public function __construct(array $data)
    {
        $this->a_venue = isset($data['a_venue']) ? (array)$data['a_venue'] : null;
    }
}
