<?php

namespace WlSdk\Wl\Appointment\Cancel;

class ConfirmPostRequest
{
    /**
     * Information about the appointment.
     *
     * `null` in case of cancellation of single appointment.
     *
     * @var array|null
     */
    public ?array $a_appointment_list = null;

    /**
     * End date of period for appointments cancellation.
     *
     * `null` in case of cancellation of single appointment.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Start date of period for appointments cancellation.
     *
     * `null` in case of cancellation of single appointment.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Max date of period for appointments cancellation.
     *
     * `null` in case of cancellation of single appointment.
     *
     * @var string|null
     */
    public ?string $dtl_max = null;

    /**
     * Min date of period for appointments cancellation.
     *
     * `null` in case of cancellation of single appointment.
     *
     * @var string|null
     */
    public ?string $dtl_min = null;

    /**
     * Cancelling status. One of {@link \WlSdk\Wl\Visit\VisitSid} constants.
     * Zero when status is choosing on form (opening form from schedule list view).
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitSid
     */
    public ?int $id_visit = null;

    /**
     * Is it recurring appointment cancellation for specific appointments.
     * `true` - for specific appointments; `false` - appointments going forward.
     *
     * @var bool|null
     */
    public ?bool $is_appointment_specific = null;

    /**
     * A staff decision to charge or not charge a penalty when a customer meets late cancel/no-show requirements.
     *
     * @var bool|null
     */
    public ?bool $is_charge_fee = null;

    /**
     * Is mail notification should be sent by default.
     *
     * @var bool|null
     */
    public ?bool $is_inform_mail = null;

    /**
     * Is push notification should be sent by default.
     *
     * @var bool|null
     */
    public ?bool $is_inform_push = null;

    /**
     * Is SMS notification should be sent by default.
     *
     * @var bool|null
     */
    public ?bool $is_inform_sms = null;

    /**
     * Is it recurring appointment cancellation.
     *
     * `false` in case of cancellation of single appointment.
     *
     * @var bool|null
     */
    public ?bool $is_recurring = null;

    /**
     * Key of the cancelling appointment. Primary key in RsAppointmentSql table.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Key of the business. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the live mail pattern. Primary key in RsMailPatternLiveSql table.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern_live = null;

    /**
     * Key of the visit to cancel. Primary key in RsVisitSql table.
     * Empty when visit key not known (opening form from schedule list view).
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Amount to be charged for the user.
     *
     * `null` if specified visit is not the blame, according business late cancel and no shows rules.
     *
     * @var string|null
     */
    public ?string $m_fee_amount = null;

    /**
     * Cancelling reason.
     *
     * @var string|null
     */
    public ?string $text_reason = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_appointment_list' => $this->a_appointment_list,
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'dtl_max' => $this->dtl_max,
            'dtl_min' => $this->dtl_min,
            'id_visit' => $this->id_visit,
            'is_appointment_specific' => $this->is_appointment_specific,
            'is_charge_fee' => $this->is_charge_fee,
            'is_inform_mail' => $this->is_inform_mail,
            'is_inform_push' => $this->is_inform_push,
            'is_inform_sms' => $this->is_inform_sms,
            'is_recurring' => $this->is_recurring,
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'k_mail_pattern_live' => $this->k_mail_pattern_live,
            'k_visit' => $this->k_visit,
            'm_fee_amount' => $this->m_fee_amount,
            'text_reason' => $this->text_reason,
            ],
            static fn ($v) => $v !== null
        );
    }
}
