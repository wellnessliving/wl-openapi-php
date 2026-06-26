<?php

namespace WlSdk\Wl\Session;

class LocationPostRequest
{
    /**
     * Location selected when application was started.
     * Primary key in RsLocationSql table.
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
