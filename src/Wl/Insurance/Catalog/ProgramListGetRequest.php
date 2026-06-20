<?php

namespace WlSdk\Wl\Insurance\Catalog;

class ProgramListGetRequest
{
    /**
     * The key of the franchisee business.
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
