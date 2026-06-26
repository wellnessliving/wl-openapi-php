<?php

namespace WlSdk\Wl\Location\TimeZone;

class TimeZoneGetRequest
{
    /**
     * Latitude of the location.
     *
     * @var float|null
     */
    public ?float $f_latitude = null;

    /**
     * Longitude of the location.
     *
     * @var float|null
     */
    public ?float $f_longitude = null;

    public function params(): array
    {
        return array_filter(
            [
            'f_latitude' => $this->f_latitude,
            'f_longitude' => $this->f_longitude,
            ],
            static fn ($v) => $v !== null
        );
    }
}
