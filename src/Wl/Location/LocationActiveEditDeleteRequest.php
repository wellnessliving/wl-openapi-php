<?php

namespace WlSdk\Wl\Location;

class LocationActiveEditDeleteRequest
{
    /**
     * Primary key of business in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Primary key of location in RsLocationSql table.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key of the location active log.
     *
     * @var string|null
     */
    public ?string $k_location_active_log = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_location_active_log' => $this->k_location_active_log,
            ],
            static fn ($v) => $v !== null
        );
    }
}
