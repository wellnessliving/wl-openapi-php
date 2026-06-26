<?php

namespace WlSdk\Wl\Catalog\Location;

class LocationGetRequest
{
    /**
     * ID of the business.
     *
     * @var int|null
     */
    public ?int $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
