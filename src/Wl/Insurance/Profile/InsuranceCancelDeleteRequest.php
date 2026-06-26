<?php

namespace WlSdk\Wl\Insurance\Profile;

class InsuranceCancelDeleteRequest
{
    /**
     * The key of the business where we need to cancel Wellness Program membership.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of login promotion to cancel.
     *
     * Primary key from RsLoginPromotionSql table.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The key of the user to cancel Wellness Program membership.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
