<?php

namespace WlSdk\Wl\Timezone;

class TimezoneCurrentTimeGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Timezone key.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_timezone' => $this->k_timezone,
            ],
            static fn ($v) => $v !== null
        );
    }
}
