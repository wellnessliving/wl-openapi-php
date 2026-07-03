<?php

namespace WlSdk\Wl\Login\Promotion;

class PromotionPayPauseGetRequest
{
    /**
     * The end date of the current hold, in the local time zone.
     * This can be set to a special value `0000-00-00` to make the period indefinite until further action.
     *
     * `null` if it shouldn't be updated.
     *
     * @var string|null
     */
    public ?string $dt_end = null;

    /**
     * The start date of the current hold, in the local time zone.
     *
     * `null` if it shouldn't be updated.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * Whether need to get all pause periods for the login promotion.
     * If `true` then {@link \WlSdk\Wl\Login\Promotion\PromotionPayPause} will be returned.
     * If `false` then information about specified {@link \WlSdk\Wl\Login\Promotion\PromotionPayPause} or
     * currently active pause period will be returned ({@link \WlSdk\Wl\Login\Promotion\PromotionPayPause},
     * {@link \WlSdk\Wl\Login\Promotion\PromotionPayPause} and {@link
     * \WlSdk\Wl\Login\Promotion\PromotionPayPause}).
     *
     * @var bool|null
     */
    public ?bool $is_list = null;

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
     * Ignored if {@link \WlSdk\Wl\Login\Promotion\PromotionPayPause} is provided.
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
     * \WlSdk\Wl\Login\Promotion\PromotionPayPause}.
     *
     * @var string|null
     */
    public ?string $k_promotion_pay_pause = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_end' => $this->dt_end,
            'dt_start' => $this->dt_start,
            'is_list' => $this->is_list,
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'k_promotion_pay_pause' => $this->k_promotion_pay_pause,
            ],
            static fn ($v) => $v !== null
        );
    }
}
