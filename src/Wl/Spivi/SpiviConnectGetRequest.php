<?php

namespace WlSdk\Wl\Spivi;

class SpiviConnectGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
