<?php

namespace WlSdk\Core\Geo;

class GeoTimezoneGetRequest
{
    /**
     * Time offset in minutes.
     *
     * @var int|null
     */
    public ?int $i_timezone_offset_minutes = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_timezone_offset_minutes' => $this->i_timezone_offset_minutes,
            ],
            static fn ($v) => $v !== null
        );
    }
}
