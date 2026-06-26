<?php

namespace WlSdk\Wl\Promotion\Edit\Region;

class RegionListGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Promotion key.
     *
     * `null` if promotion is not created yet.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_promotion' => $this->k_promotion,
            ],
            static fn ($v) => $v !== null
        );
    }
}
