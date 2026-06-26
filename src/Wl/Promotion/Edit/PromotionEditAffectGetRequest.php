<?php

namespace WlSdk\Wl\Promotion\Edit;

class PromotionEditAffectGetRequest
{
    /**
     * Business key promotion belongs to. Primary key of RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of promotion. Primary key of RsPromotionSql table.
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
