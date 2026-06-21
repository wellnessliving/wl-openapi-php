<?php

namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseBusinessPolicy
{
    /**
     * List of not allowed decline reasons to payment reattempt. Each element is one of {@link
     * \WlSdk\Thoth\WlPay\PayExceptionSid} constants.
     *
     * @var int[]|null
     */
    public ?array $a_payment_reattempt_not_decline_reason = null;

    /**
     * Keys are list of IDs from {@link \WlSdk\Wl\Service\ServiceSid}, and values are flags whether wait list is
     * allowed.
     *
     * @var int|null
     */
    public ?int $a_wait_service = null;

    /**
     * Minimum hours|days|months before class should be booked.
     *
     * @var int|null
     */
    public ?int $i_book_before = null;

    /**
     * Maximum hours|days|months after class can be booked.
     *
     * @var int|null
     */
    public ?int $i_book_future = null;

    /**
     * Minimum hours|days|months before class should be canceled without penalty.
     *
     * @var int|null
     */
    public ?int $i_cancel = null;

    /**
     * Minimum hours|days|months before class should be promoted from wait list.
     *
     * @var int|null
     */
    public ?int $i_promote = null;

    /**
     * Minimum hours|days|months the notifications which are sent for client confirmation required should be sent
     * to all clients on the wait list at the same time up to the cut off time.
     *
     * @var int|null
     */
    public ?int $i_promote_fastest_response = null;

    /**
     * Minimum hours|days|months the notifications which are sent for client confirmation must confirm their a
     * promote from the waiting list to the active list.
     *
     * @var int|null
     */
    public ?int $i_promote_require_confirm = null;

    /**
     * Number of failed auto-payments reattempts.
     *
     * @var int|null
     */
    public ?int $i_reattempt_count = null;

    /**
     * Hours|days|months from {@link \WlSdk\ADurationSid}.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_book_before = null;

    /**
     * Hours|days|months from {@link \WlSdk\ADurationSid}.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_book_future = null;

    /**
     * Hours|days|months from {@link \WlSdk\ADurationSid}.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_cancel = null;

    /**
     * Hours|days|months from {@link \WlSdk\ADurationSid}.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_promote = null;

    /**
     * Hours|days|months from {@link \WlSdk\ADurationSid}.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_promote_fastest_response = null;

    /**
     * Hours|days|months from {@link \WlSdk\ADurationSid}.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_promote_require_confirm = null;

    /**
     * if `true` - clients with purchase options are only allowed
     * to book sessions within their current paid period, `false` - during purchase option's duration.
     *
     * @var bool|null
     */
    public ?bool $is_book_inside_active_pay_period = null;

    /**
     * 1 if a client's automatic payment fails, their account should not be
     * debited and their purchase option becomes inactive, 0 - otherwise. Default 0.
     *
     * @var bool|null
     */
    public ?bool $is_disable_promotion = null;

    /**
     * Whether to charge penalty after final auto-payment attempt.
     *
     * @var bool|null
     */
    public ?bool $is_enable_payment_penalty = null;

    /**
     * Whether to reattempt failed auto-payments.
     *
     * @var bool|null
     */
    public ?bool $is_enable_payment_reattempt = null;

    /**
     * Whether to restrict which IP addresses staff can login from.
     *
     * @var bool|null
     */
    public ?bool $is_enable_staff_ip_restriction = null;

    /**
     * 1 if booking for a client with negative balance is disabled, 0 - otherwise. Default 0.
     *
     * @var bool|null
     */
    public ?bool $is_prevent_booking = null;

    /**
     * If true, client can not choose provider while appointment wizard.
     *
     * @var bool|null
     */
    public ?bool $is_staff_restrict = null;

    /**
     * Enable\disable wait list.
     *
     * @var bool|null
     */
    public ?bool $is_wait = null;

    /**
     * Currency from rs.currency table.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * Timezone from get.timezone table.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    /**
     * Penalty amount to charge after final auto-payment attempt.
     *
     * @var string|null
     */
    public ?string $m_payment_penalty = null;

    /**
     * Custom Url of a business
     *
     * @var string|null
     */
    public ?string $url_custom = null;

    public function __construct(array $data)
    {
        $this->a_payment_reattempt_not_decline_reason = isset($data['a_payment_reattempt_not_decline_reason']) ? (array)$data['a_payment_reattempt_not_decline_reason'] : null;
        $this->a_wait_service = isset($data['a_wait_service']) ? (int)$data['a_wait_service'] : null;
        $this->i_book_before = isset($data['i_book_before']) ? (int)$data['i_book_before'] : null;
        $this->i_book_future = isset($data['i_book_future']) ? (int)$data['i_book_future'] : null;
        $this->i_cancel = isset($data['i_cancel']) ? (int)$data['i_cancel'] : null;
        $this->i_promote = isset($data['i_promote']) ? (int)$data['i_promote'] : null;
        $this->i_promote_fastest_response = isset($data['i_promote_fastest_response']) ? (int)$data['i_promote_fastest_response'] : null;
        $this->i_promote_require_confirm = isset($data['i_promote_require_confirm']) ? (int)$data['i_promote_require_confirm'] : null;
        $this->i_reattempt_count = isset($data['i_reattempt_count']) ? (int)$data['i_reattempt_count'] : null;
        $this->id_book_before = isset($data['id_book_before']) ? (int)$data['id_book_before'] : null;
        $this->id_book_future = isset($data['id_book_future']) ? (int)$data['id_book_future'] : null;
        $this->id_cancel = isset($data['id_cancel']) ? (int)$data['id_cancel'] : null;
        $this->id_promote = isset($data['id_promote']) ? (int)$data['id_promote'] : null;
        $this->id_promote_fastest_response = isset($data['id_promote_fastest_response']) ? (int)$data['id_promote_fastest_response'] : null;
        $this->id_promote_require_confirm = isset($data['id_promote_require_confirm']) ? (int)$data['id_promote_require_confirm'] : null;
        $this->is_book_inside_active_pay_period = isset($data['is_book_inside_active_pay_period']) ? (bool)$data['is_book_inside_active_pay_period'] : null;
        $this->is_disable_promotion = isset($data['is_disable_promotion']) ? (bool)$data['is_disable_promotion'] : null;
        $this->is_enable_payment_penalty = isset($data['is_enable_payment_penalty']) ? (bool)$data['is_enable_payment_penalty'] : null;
        $this->is_enable_payment_reattempt = isset($data['is_enable_payment_reattempt']) ? (bool)$data['is_enable_payment_reattempt'] : null;
        $this->is_enable_staff_ip_restriction = isset($data['is_enable_staff_ip_restriction']) ? (bool)$data['is_enable_staff_ip_restriction'] : null;
        $this->is_prevent_booking = isset($data['is_prevent_booking']) ? (bool)$data['is_prevent_booking'] : null;
        $this->is_staff_restrict = isset($data['is_staff_restrict']) ? (bool)$data['is_staff_restrict'] : null;
        $this->is_wait = isset($data['is_wait']) ? (bool)$data['is_wait'] : null;
        $this->k_currency = isset($data['k_currency']) ? (string)$data['k_currency'] : null;
        $this->k_timezone = isset($data['k_timezone']) ? (string)$data['k_timezone'] : null;
        $this->m_payment_penalty = isset($data['m_payment_penalty']) ? (string)$data['m_payment_penalty'] : null;
        $this->url_custom = isset($data['url_custom']) ? (string)$data['url_custom'] : null;
    }
}
