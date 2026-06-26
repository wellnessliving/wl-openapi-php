<?php

namespace WlSdk\Wl\Location\LocationRate;

class LocationRateGetRequest
{
    /**
     * ID of a location to show rate for.
     *
     * Primary key in RsLocationSql.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_location' => $this->k_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
