<?php

namespace WlSdk\Wl\Location\Staff;

class ListGetRequest
{
    /**
     * ID of a location.
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
