<?php

namespace WlSdk\Wl\Appointment\Info;

/**
 * Response from GET
 */
class InfoGetResponse
{
    /**
     * Next appointment data, or empty array if there are no appointments in the future:
     *
     * @var InfoGetResponseNext|null
     */
    public ?InfoGetResponseNext $a_next = null;

    /**
     * Previous appointment data, or empty array if there are no appointments in the past:
     *
     * @var InfoGetResponsePrevious|null
     */
    public ?InfoGetResponsePrevious $a_previous = null;

    /**
     * List of questions and answers:
     *
     * @var InfoGetResponseQuestion[]|null
     */
    public ?array $a_question = null;

    /**
     * List of assets used by this appointment. Each element contains:
     *
     * @var InfoGetResponseResource[]|null
     */
    public ?array $a_resource = null;

    /**
     * List of appointment add-ons. Every element has next keys:
     *
     * @var InfoGetResponseShopProductOption[]|null
     */
    public ?array $a_shop_product_option = null;

    /**
     * Date/time of appointment in location timezone.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * Appointment duration (in minutes).
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Index of booked asset.
     *
     * @var int|null
     */
    public ?int $i_index = null;

    /**
     * Status of appointment payment. One of {@link \WlSdk\RsAppointmentPaySid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsAppointmentPaySid
     */
    public ?int $id_appointment_pay = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Purchased promotion which provides this appointment.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Asset key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Asset category key.
     *
     * @var string|null
     */
    public ?string $k_resource_type = null;

    /**
     * Service key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Service category key.
     *
     * @var string|null
     */
    public ?string $k_service_category = null;

    /**
     * Purchased drop-in which provides this appointment.
     *
     * @var string|null
     */
    public ?string $k_session_pass = null;

    /**
     * Staff member who conducts this appointment.
     *
     * Deprecated: returned only for a limited list of third-party apps to keep backward compatibility.
     * Use `uid_staff` instead.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Title of the appointment.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * User for whom this appointment was booked.
     *
     * @var string|null
     */
    public ?string $uid_appointment = null;

    /**
     * Staff member who conducts this appointment.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->a_next = isset($data['a_next']) ? new InfoGetResponseNext((array)$data['a_next']) : null;
        $this->a_previous = isset($data['a_previous']) ? new InfoGetResponsePrevious((array)$data['a_previous']) : null;
        $this->a_question = isset($data['a_question']) ? array_map(static fn ($item) => new InfoGetResponseQuestion((array)$item), (array)$data['a_question']) : null;
        $this->a_resource = isset($data['a_resource']) ? array_map(static fn ($item) => new InfoGetResponseResource((array)$item), (array)$data['a_resource']) : null;
        $this->a_shop_product_option = isset($data['a_shop_product_option']) ? array_map(static fn ($item) => new InfoGetResponseShopProductOption((array)$item), (array)$data['a_shop_product_option']) : null;
        $this->dt_date_local = isset($data['dt_date_local']) ? (string)$data['dt_date_local'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_index = isset($data['i_index']) ? (int)$data['i_index'] : null;
        $this->id_appointment_pay = isset($data['id_appointment_pay']) ? (int)$data['id_appointment_pay'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->k_resource_type = isset($data['k_resource_type']) ? (string)$data['k_resource_type'] : null;
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->k_service_category = isset($data['k_service_category']) ? (string)$data['k_service_category'] : null;
        $this->k_session_pass = isset($data['k_session_pass']) ? (string)$data['k_session_pass'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->uid_appointment = isset($data['uid_appointment']) ? (string)$data['uid_appointment'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
