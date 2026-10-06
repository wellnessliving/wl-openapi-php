<?php

namespace WlSdk\Wl\Appointment\Book\Location;

class LocationGetResponseLocation
{
    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Full address of the location, including city, region, and country. Empty if the address is unknown.
     *
     * @var string|null
     */
    public ?string $s_address = null;

    /**
     * URL of the map image for the location address. Empty if the address is unknown.
     *
     * @var string|null
     */
    public ?string $s_map = null;

    /**
     * Location title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->s_address = isset($data['s_address']) ? (string)$data['s_address'] : null;
        $this->s_map = isset($data['s_map']) ? (string)$data['s_map'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
