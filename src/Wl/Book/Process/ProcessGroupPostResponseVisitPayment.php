<?php

namespace WlSdk\Wl\Book\Process;

class ProcessGroupPostResponseVisitPayment
{
    /**
     * `true` if the visit is free; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_free = null;

    /**
     * `true` if the booking triggered the payment flow: the visit is booked, is not paid, and the client must
     *   pay for it by the link in `text_payment_link`, otherwise the visit is cancelled automatically.
     *   `false` otherwise: the visit is paid, free, waitlisted, cancelled, or the application is allowed to book
     *   without paying at all.
     *
     * @var bool|null
     */
    public ?bool $is_pay_required = null;

    /**
     * `true` whether the booked slot was waitlisted; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_waitlist = null;

    /**
     * Applied user's purchase option.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Purchase option.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * Applied session pass.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    /**
     * Link to complete the payment, the same one the client receives by email.
     *   `null` if `is_pay_required` is `false`.
     *
     * @var string|null
     */
    public ?string $text_payment_link = null;

    /**
     * Purchase option title.
     *
     * @var string|null
     */
    public ?string $text_promotion = null;

    public function __construct(array $data)
    {
        $this->is_free = isset($data['is_free']) ? (bool)$data['is_free'] : null;
        $this->is_pay_required = isset($data['is_pay_required']) ? (bool)$data['is_pay_required'] : null;
        $this->is_waitlist = isset($data['is_waitlist']) ? (bool)$data['is_waitlist'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->k_session_pass = isset($data['k_session_pass']) ? (string)$data['k_session_pass'] : null;
        $this->text_payment_link = isset($data['text_payment_link']) ? (string)$data['text_payment_link'] : null;
        $this->text_promotion = isset($data['text_promotion']) ? (string)$data['text_promotion'] : null;
    }
}
