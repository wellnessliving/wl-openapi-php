<?php

namespace WlSdk\Wl\Login\Promotion;

/**
 * Response from GET
 */
class PromotionPayPauseGetResponse
{
    /**
     * List of all promotion payment pause periods. Each element has next structure:
     *
     * `null` if `is_list` is false.
     *
     * @var PromotionPayPauseGetResponsePayPauseList[]|null
     */
    public ?array $a_pay_pause_list = null;

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
     * The date when the email notification was sent.
     *
     * `null` if it shouldn't be updated.
     *
     * @var string|null
     */
    public ?string $dtu_date_notification = null;

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
     * Key of the email pattern.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern = null;

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
     * Additional notes for the promotion payment pause period.
     * Leave this field as `null` if the note shouldn't be updated.
     *
     * `null` if it shouldn't be updated.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    public function __construct(array $data)
    {
        $this->a_pay_pause_list = isset($data['a_pay_pause_list']) ? array_map(static fn ($item) => new PromotionPayPauseGetResponsePayPauseList((array)$item), (array)$data['a_pay_pause_list']) : null;
        $this->dt_end = isset($data['dt_end']) ? (string)$data['dt_end'] : null;
        $this->dt_start = isset($data['dt_start']) ? (string)$data['dt_start'] : null;
        $this->dtu_date_notification = isset($data['dtu_date_notification']) ? (string)$data['dtu_date_notification'] : null;
        $this->is_mail = isset($data['is_mail']) ? (bool)$data['is_mail'] : null;
        $this->is_push = isset($data['is_push']) ? (bool)$data['is_push'] : null;
        $this->is_sms = isset($data['is_sms']) ? (bool)$data['is_sms'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_mail_pattern = isset($data['k_mail_pattern']) ? (string)$data['k_mail_pattern'] : null;
        $this->k_promotion_pay_pause = isset($data['k_promotion_pay_pause']) ? (string)$data['k_promotion_pay_pause'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
    }
}
