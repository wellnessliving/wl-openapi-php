<?php

namespace WlSdk\Wl\Login\Promotion\Cancel;

class NotificationPatternGetRequest
{
    /**
     * The key of the business to which the promotion belongs. Primary key in RsBusinessSql table.
     *
     * `null` when not initialized.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of login promotion to update options for.
     *
     * Primary key in RsLoginPromotionSql table.
     *
     * `null` when not initialized.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Key of the user performing the request. Primary key in PassportLoginSql table.
     *
     * `null` when not initialized.
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
