<?php

namespace WlSdk\Wl\Insurance\Profile;

class InsuranceHoldPostRequest
{
    /**
     * Key of business to which currently handled login promotion belongs.
     * Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of login promotion to cancel.
     *
     * Primary key in RsLoginPromotionSql table.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            ],
            static fn ($v) => $v !== null
        );
    }
}
