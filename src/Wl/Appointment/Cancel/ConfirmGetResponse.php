<?php

namespace WlSdk\Wl\Appointment\Cancel;

/**
 * Response from GET
 */
class ConfirmGetResponse
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
     * Amount to be charged for the user.
     *
     * `null` if specified visit is not the blame, according business late cancel and no shows rules.
     *
     * @var string|null
     */
    public ?string $html_fee_amount = null;

    /**
     * Count of selected appointments during recurring appointments cancellation.
     *
     * `null` in case of cancellation of single appointment.
     *
     * @var int|null
     */
    public ?int $i_appointment_selected = null;

    /**
     * Type of the blame, one of {@link \WlSdk\Wl\Business\Policy\ChargeSid} constants.
     *
     * `0` means blame is not configured.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Policy\ChargeSid
     */
    public ?int $id_charge = null;

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
     * Location key of cancelling appointment.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key of the service of appointment. Primary key in RsServiceSql table.
     * 'null' when cancelling asset booking.
     *
     * @var string|null
     */
    public ?string $k_service = null;

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
     * Notification to be sent. One of {@link \WlSdk\RsMailSid} constants.
     *
     * @var string|null
     */
    public ?string $sid_mail = null;

    /**
     * Name of client which appointment is cancelling.
     *
     * @var string|null
     */
    public ?string $text_client_name = null;

    /**
     * Cancelling status name.
     *
     * @var string|null
     */
    public ?string $text_status = null;

    /**
     * Appointment title.
     *
     * `null` in case of cancellation of single appointment.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_appointment_list = isset($data['a_appointment_list']) ? (array)$data['a_appointment_list'] : null;
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->dtl_max = isset($data['dtl_max']) ? (string)$data['dtl_max'] : null;
        $this->dtl_min = isset($data['dtl_min']) ? (string)$data['dtl_min'] : null;
        $this->html_fee_amount = isset($data['html_fee_amount']) ? (string)$data['html_fee_amount'] : null;
        $this->i_appointment_selected = isset($data['i_appointment_selected']) ? (int)$data['i_appointment_selected'] : null;
        $this->id_charge = isset($data['id_charge']) ? (int)$data['id_charge'] : null;
        $this->is_inform_mail = isset($data['is_inform_mail']) ? (bool)$data['is_inform_mail'] : null;
        $this->is_inform_push = isset($data['is_inform_push']) ? (bool)$data['is_inform_push'] : null;
        $this->is_inform_sms = isset($data['is_inform_sms']) ? (bool)$data['is_inform_sms'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
        $this->m_fee_amount = isset($data['m_fee_amount']) ? (string)$data['m_fee_amount'] : null;
        $this->sid_mail = isset($data['sid_mail']) ? (string)$data['sid_mail'] : null;
        $this->text_client_name = isset($data['text_client_name']) ? (string)$data['text_client_name'] : null;
        $this->text_status = isset($data['text_status']) ? (string)$data['text_status'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
