<?php

namespace WlSdk\Wl\Login\Promotion;

class PromotionPayPausePostRequest
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
     * Ignored if `k_promotion_pay_pause` is provided.
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
     * `null` if not yet initialized or if the request is based on `k_login_promotion`.
     *
     * @var string|null
     */
    public ?string $k_promotion_pay_pause = null;

    /**
     * Whether or not to send email notification.
     *
     * `false` if not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * Whether or not to send push notification.
     *
     * `false` if not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    /**
     * Whether or not to send SMS notification.
     *
     * `false` if not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    /**
     * Additional notes for the promotion payment pause period.
     * Leave this field as `null` if the note shouldn't be updated.
     *
     * `null` if it shouldn't be updated.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_end' => $this->dt_end,
            'dt_start' => $this->dt_start,
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'k_promotion_pay_pause' => $this->k_promotion_pay_pause,
            'is_mail' => $this->is_mail,
            'is_push' => $this->is_push,
            'is_sms' => $this->is_sms,
            'text_note' => $this->text_note,
            ],
            static fn ($v) => $v !== null
        );
    }
}
