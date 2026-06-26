<?php

namespace WlSdk\Wl\Spivi;

class SpiviClientMetricGetRequest
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

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid_client' => $this->uid_client,
            ],
            static fn ($v) => $v !== null
        );
    }
}
