<?php

namespace WlSdk\Wl\Catalog\Location;

/**
 * Response from GET
 */
class LocationGetResponse
{
    /**
     * A list of information about locations.
     *
     * @var array|null
     */
    public ?array $a_location = null;

    /**
     * Location key that was selected by the client last time.
     *
     * @var string|null
     */
    public ?string $k_location_active = null;

    /**
     * Home location ID.
     *
     * @var string|null
     */
    public ?string $k_location_home = null;

    /**
     * Random location ID for the business.
     *
     * @var string|null
     */
    public ?string $k_location_random = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->k_location_active = isset($data['k_location_active']) ? (string)$data['k_location_active'] : null;
        $this->k_location_home = isset($data['k_location_home']) ? (string)$data['k_location_home'] : null;
        $this->k_location_random = isset($data['k_location_random']) ? (string)$data['k_location_random'] : null;
    }
}
