<?php

namespace WlSdk\Wl\Promotion;

class PromotionGetRequest
{
    /**
     * The key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the promotion.
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
