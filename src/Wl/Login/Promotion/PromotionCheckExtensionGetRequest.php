<?php

namespace WlSdk\Wl\Login\Promotion;

class PromotionCheckExtensionGetRequest
{
    /**
     * Key of login promotion. Primary key of RsLoginPromotionSql table.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_login_promotion' => $this->k_login_promotion,
            ],
            static fn ($v) => $v !== null
        );
    }
}
