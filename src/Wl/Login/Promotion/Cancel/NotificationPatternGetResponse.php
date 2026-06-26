<?php

namespace WlSdk\Wl\Login\Promotion\Cancel;

/**
 * Response from GET
 */
class NotificationPatternGetResponse
{
    /**
     * Date now (local).
     *
     * @var string|null
     */
    public ?string $dl_now = null;

    /**
     * `true` if there are active upcoming visits paid with the membership we are going to cancel.
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $has_upcoming_visits = null;

    /**
     * Policy, whether client can use remaining visits after cancellation or not.
     *
     * @var int|null
     * @see \WlSdk\Wl\Promotion\CancelPolicySid
     */
    public ?int $id_cancel_policy = null;

    /**
     * Mail confirmation enabled. `true` when mail confirmation enabled, `false` otherwise.
     *
     * `null` when not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_inform_mail = null;

    /**
     * Push confirmation enabled. `true` when push confirmation enabled, `false` otherwise.
     *
     * `null` when not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_inform_push = null;

    /**
     * SMS confirmation enabled. `true` when sms confirmation enabled, `false` otherwise.
     *
     * `null` when not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_inform_sms = null;

    /**
     * Cancellation fee amount.
     *
     * `null` if no need charge fee.
     *
     * @var string|null
     */
    public ?string $m_terminate_fee = null;

    /**
     * SID of notification form. String representation of one from {@link \WlSdk\RsMailSid} class constants.
     *
     * @var string|null
     */
    public ?string $sid_mail = null;

    /**
     * Option type. String representation of one from {@link \WlSdk\RsProgramTypeSid} class constants.
     *
     * @var string|null
     */
    public ?string $sid_option_type = null;

    public function __construct(array $data)
    {
        $this->dl_now = isset($data['dl_now']) ? (string)$data['dl_now'] : null;
        $this->has_upcoming_visits = isset($data['has_upcoming_visits']) ? (bool)$data['has_upcoming_visits'] : null;
        $this->id_cancel_policy = isset($data['id_cancel_policy']) ? (int)$data['id_cancel_policy'] : null;
        $this->is_inform_mail = isset($data['is_inform_mail']) ? (bool)$data['is_inform_mail'] : null;
        $this->is_inform_push = isset($data['is_inform_push']) ? (bool)$data['is_inform_push'] : null;
        $this->is_inform_sms = isset($data['is_inform_sms']) ? (bool)$data['is_inform_sms'] : null;
        $this->m_terminate_fee = isset($data['m_terminate_fee']) ? (string)$data['m_terminate_fee'] : null;
        $this->sid_mail = isset($data['sid_mail']) ? (string)$data['sid_mail'] : null;
        $this->sid_option_type = isset($data['sid_option_type']) ? (string)$data['sid_option_type'] : null;
    }
}
