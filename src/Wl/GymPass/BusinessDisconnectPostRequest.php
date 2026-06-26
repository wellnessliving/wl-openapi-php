<?php

namespace WlSdk\Wl\GymPass;

class BusinessDisconnectPostRequest
{
    /**
     * Business key for which integration should be disabled.
     *
     * `null` in a case value is not specified.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key  for which integration should be disabled.
     *
     * `null` in a case value is not specified.
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
