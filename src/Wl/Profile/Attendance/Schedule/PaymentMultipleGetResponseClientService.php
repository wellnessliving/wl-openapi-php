<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

class PaymentMultipleGetResponseClientService
{
    /**
     * List of add-ons:
     *
     * @var PaymentMultipleGetResponseClientServiceAddon|null
     */
    public ?PaymentMultipleGetResponseClientServiceAddon $a_addon = null;

    /**
     * Promotions that can be used to pay for appointment:
     *
     * @var PaymentMultipleGetResponseClientServicePromotionApplicable|null
     */
    public ?PaymentMultipleGetResponseClientServicePromotionApplicable $a_promotion_applicable = null;

    /**
     * Promotions owned by the client, which can be used to pay for appointment:
     *
     * @var PaymentMultipleGetResponseClientServicePromotionOwned|null
     */
    public ?PaymentMultipleGetResponseClientServicePromotionOwned $a_promotion_owned = null;

    /**
     * `true` if appointment has unpaid add-ons, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $has_unpaid_addon = null;

    /**
     * `true` if the appointment is not free and not paid, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $is_pay_need = null;

    /**
     * `true` if the payment is required, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $is_required = null;

    /**
     * Appointment key.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Appointment date.
     *
     * @var string|null
     */
    public ?string $text_date = null;

    /**
     * Appointment title.
     *
     * @var string|null
     */
    public ?string $text_service = null;

    /**
     * Name of the staff leading the appointment. `null` for asset.
     *
     * @var string|null
     */
    public ?string $text_staff = null;

    /**
     * Appointment time.
     *
     * @var string|null
     */
    public ?string $text_time = null;

    /**
     * Appointment timezone abbreviation.
     *
     * @var string|null
     */
    public ?string $text_timezone_abbr = null;

    /**
     * Appointment user key.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->a_addon = isset($data['a_addon']) ? new PaymentMultipleGetResponseClientServiceAddon((array)$data['a_addon']) : null;
        $this->a_promotion_applicable = isset($data['a_promotion_applicable']) ? new PaymentMultipleGetResponseClientServicePromotionApplicable((array)$data['a_promotion_applicable']) : null;
        $this->a_promotion_owned = isset($data['a_promotion_owned']) ? new PaymentMultipleGetResponseClientServicePromotionOwned((array)$data['a_promotion_owned']) : null;
        $this->has_unpaid_addon = isset($data['has_unpaid_addon']) ? (bool)$data['has_unpaid_addon'] : null;
        $this->is_pay_need = isset($data['is_pay_need']) ? (bool)$data['is_pay_need'] : null;
        $this->is_required = isset($data['is_required']) ? (bool)$data['is_required'] : null;
        $this->k_appointment = isset($data['k_appointment']) ? (string)$data['k_appointment'] : null;
        $this->text_date = isset($data['text_date']) ? (string)$data['text_date'] : null;
        $this->text_service = isset($data['text_service']) ? (string)$data['text_service'] : null;
        $this->text_staff = isset($data['text_staff']) ? (string)$data['text_staff'] : null;
        $this->text_time = isset($data['text_time']) ? (string)$data['text_time'] : null;
        $this->text_timezone_abbr = isset($data['text_timezone_abbr']) ? (string)$data['text_timezone_abbr'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
