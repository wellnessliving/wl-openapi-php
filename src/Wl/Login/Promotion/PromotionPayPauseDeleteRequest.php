<?php

namespace WlSdk\Wl\Login\Promotion;

class PromotionPayPauseDeleteRequest
{
    /**
     * Key of business to which currently handled pause period or login promotion belongs.
     *
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The Purchase Option key. If this key is used, a new hold will be created. The endpoint will return a
     * `start-cross`
     * status code if a hold is already in place.
     *
     * Ignored if {@link \WlSdk\Wl\Login\Promotion\PromotionPayPauseGetResponse::$k_promotion_pay_pause} is
     * provided.
     *
     * `null` if not yet initialized.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The promotion payment hold key. If this key is used, it will edit an existing hold.
     * This key will be empty if there's no active hold in place or if a scheduled hold isn't in effect.
     *
     * `null` if not yet initialized or if the request is based on {@link
     * \WlSdk\Wl\Login\Promotion\PromotionPayPauseGetResponse::$k_login_promotion}.
     *
     * @var string|null
     */
    public ?string $k_promotion_pay_pause = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'k_promotion_pay_pause' => $this->k_promotion_pay_pause,
            ],
            static fn ($v) => $v !== null
        );
    }
}
