<?php

namespace WlSdk\Wl\Member\Purchase;

class MemberByPromotionGetRequest
{
    /**
     * The key of the business for which to get a list of clients.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The comma-separated list of the Purchase Option keys.
     * Only active clients with at least one active Purchase Option from this list will be returned.
     *
     * For example: '324,123,11,556'
     *
     * @var string|null
     */
    public ?string $s_promotion_keys = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_promotion_keys' => $this->s_promotion_keys,
            ],
            static fn ($v) => $v !== null
        );
    }
}
