<?php

namespace WlSdk\Wl\Promotion;

class PromotionListGetRequest
{
    /**
     * Determines whether to return promotions created by Enterprise Locations (for Enterprise Cloud businesses
     * only).
     * If `true`, promotions created by Enterprise Locations are included. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_franchise = null;

    /**
     * The business key used to get the promotions.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_franchise' => $this->is_franchise,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
