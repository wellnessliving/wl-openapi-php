<?php

namespace WlSdk\Wl\Franchise\Fee;

class FeeElementDeleteRequest
{
    /**
     * Franchisor business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Franchise fee key.
     *
     * `null` when creating new fee.
     *
     * @var string|null
     */
    public ?string $k_franchise_fee = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_franchise_fee' => $this->k_franchise_fee,
            ],
            static fn ($v) => $v !== null
        );
    }
}
