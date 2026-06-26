<?php

namespace WlSdk\Wl\Login\Promotion;

class PromotionPayCancelPutRequest
{
    /**
     * The key of the business to which the promotion belongs. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of login promotion to update options for.
     *
     * Primary key in RsLoginPromotionSql table.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Key of the user performing the request. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Whether the client may use remaining visits after promotion cancellation.
     *
     * @var bool|null
     */
    public ?bool $is_use = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'uid' => $this->uid,
            'is_use' => $this->is_use,
            ],
            static fn ($v) => $v !== null
        );
    }
}
