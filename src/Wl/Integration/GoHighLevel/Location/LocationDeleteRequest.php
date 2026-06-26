<?php

namespace WlSdk\Wl\Integration\GoHighLevel\Location;

class LocationDeleteRequest
{
    /**
     * Location key.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_location' => $this->a_location,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
