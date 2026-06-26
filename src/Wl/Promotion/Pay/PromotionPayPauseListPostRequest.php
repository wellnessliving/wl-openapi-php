<?php

namespace WlSdk\Wl\Promotion\Pay;

class PromotionPayPauseListPostRequest
{
    /**
     * End date of pause period in login promotion timezone. Can be set to special value
     * `0000-00-00` to make the period indefinite until further action.
     *
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Start date of pause period in login promotion timezone.
     *
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Action to perform with promotion payment pause periods.
     * One for the {@link \WlSdk\Wl\Promotion\Pay\PromotionPayPauseActionSid} constants.
     *
     * `null` if not initialized.
     *
     * @var int|null
     * @see \WlSdk\Wl\Promotion\Pay\PromotionPayPauseActionSid
     */
    public ?int $id_action = null;

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
     * Bulk of login promotions. Login promotion primary keys serialized with JSON.
     * This logic was selected, because there is possibility to transfer list with more than 1000 elements.
     *
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $s_login_promotion = null;

    /**
     * Additional notes for promotion payment pause period.
     *
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'id_action' => $this->id_action,
            'is_mail' => $this->is_mail,
            'is_push' => $this->is_push,
            'is_sms' => $this->is_sms,
            's_login_promotion' => $this->s_login_promotion,
            'text_note' => $this->text_note,
            ],
            static fn ($v) => $v !== null
        );
    }
}
