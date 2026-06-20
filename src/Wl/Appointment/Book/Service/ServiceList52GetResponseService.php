<?php
namespace WlSdk\Wl\Appointment\Book\Service;

class ServiceList52GetResponseService
{
    /**
     * The list of tab keys for the service.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * A list of links to start booking from a direct link.
     * This can't be one link, as the same appointment can be available in several booking tabs.
     * Therefore, each booking tab has its own direct booking link.
     * Each element has two values:
     *
     * @var ServiceList52GetResponseServiceDirectLink|null
     */
    public ?ServiceList52GetResponseServiceDirectLink $a_direct_link = null;

    /**
     * Appointment-specific business policy overrides. `null` when the service uses the general business policy.
     * When not `null`, contains a subset of business config fields, including:
     *
     * @var ServiceList52GetResponseServiceConfig|null
     */
    public ?ServiceList52GetResponseServiceConfig $a_config = null;

    /**
     * Information about the appointment image. An array with the following values:
     *
     * @var ServiceList52GetResponseServiceImage|null
     */
    public ?ServiceList52GetResponseServiceImage $a_image = null;

    /**
     * Keys are login type keys.
     * Values - List of login types' titles for current service. Clients that have one of these types can book
     * service.
     *
     * @var string[]|null
     */
    public ?array $a_login_type_restriction = null;

    /**
     * Keys are member group keys.
     * Values - list of member groups' titles for current service. Clients that belongs to these groups can book
     * service.
     *
     * @var string[]|null
     */
    public ?array $a_member_group_restriction = null;

    /**
     * The amount of deposit required.
     *
     * @var string|null
     */
    public ?string $f_deposit = null;

    /**
     * The maximum offline price.
     *
     * @var string|null
     */
    public ?string $f_offline_max = null;

    /**
     * The minimum offline price.
     *
     * @var string|null
     */
    public ?string $f_offline_min = null;

    /**
     * The online price.
     *
     * @var string|null
     */
    public ?string $f_online = null;

    /**
     * Determines whether the service will be hidden in the White Label mobile application.
     *  `true` means that service won't be displayed. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $hide_application = null;

    /**
     * The required minimum client age to book an appointment.
     *
     * @var int|null
     */
    public ?int $i_age_from = null;

    /**
     * The required maximum client age to book an appointment.
     *
     * @var int|null
     */
    public ?int $i_age_to = null;

    /**
     * The price type ID. One of {@link \WlSdk\RsServicePriceSid} constants.
     *
     * @var int|null
     */
    public ?int $i_price = null;

    /**
     * The appointment duration in minutes.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * The type of client booking flow. One of {@link \WlSdk\Wl\Service\ServiceBookFlowSid} constants.
     *
     * @var int|null
     */
    public ?int $id_book_flow = null;

    /**
     * The required payment type ID. One of {@link \WlSdk\RsServiceRequireSid} constants.
     *
     * @var int|null
     */
    public ?int $id_service_require = null;

    /**
     * `true` if age restrictions are public. Otherwise, `false` if they should be hidden from clients.
     *
     * @var bool|null
     */
    public ?bool $is_age_public = null;

    /**
     * Determines whether this service can't be booked due to age restrictions.
     *
     * @var bool|null
     */
    public ?bool $is_age_restricted = null;

    /**
     * Determines whether this service supports back-to-back booking.
     *
     * @var bool|null
     */
    public ?bool $is_back_to_back = null;

    /**
     * Whether this appointment can be booked online.
     *
     * @var bool|null
     */
    public ?bool $is_bookable = null;

    /**
     * `true` if clients can book classes and appointments on a recurring basis. Otherwise, this `false`.
     *
     * @var bool|null
     */
    public ?bool $is_book_repeat_client = null;

    /**
     * `true` if appointment bookings default to weekly recurring with no end date, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_book_repeat_no_end_date_appointment = null;

    /**
     * `true` if `f_deposit` is a percentage. Otherwise, this will be `false` if `f_deposit` is an amount of
     * money.
     *
     * @var bool|null
     */
    public ?bool $is_deposit_percent = null;

    /**
     * `true` if clients can select the staff member's gender. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_gender_select = null;

    /**
     * `true` if clients can buy this appointment. Otherwise, this will be `false` if only staff members can sell
     * it.
     *
     * @var bool|null
     */
    public ?bool $is_online_sell = null;

    /**
     * `true` if the service requires assets. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_resource_type = null;

    /**
     * `true` if the appointment can be booked without a Purchase Option. Otherwise, this will be `false` if it's
     * necessary to
     * buy a Purchase Option.
     *
     * @var bool|null
     */
    public ?bool $is_single_buy = null;

    /**
     * `true` if the appointment must be confirmed by a staff member after booking. Otherwise, this will be
     * `false`.
     *
     * @var bool|null
     */
    public ?bool $is_staff_confirm = null;

    /**
     * `true` if clients can select a staff member for the appointment. Otherwise, this will be `false` if
     * otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_staff_skip = null;

    /**
     * Determines whether the service will ask for questions or not.
     *
     * @var bool|null
     */
    public ?bool $is_question = null;

    /**
     * `true` if the service is virtual. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * The appointment primary key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * The service category primary key.
     *
     * @var string|null
     */
    public ?string $k_service_category = null;

    /**
     * The appointment duration in a human-readable format.
     *
     * @var string|null
     */
    public ?string $s_duration = null;

    /**
     * The appointment title.
     *
     * @var string|null
     */
    public ?string $s_service = null;

    /**
     * Age restriction header.
     *
     * @var string|null
     */
    public ?string $text_age_restriction = null;

    /**
     * Appointment description (deprecated, use `html_description`).
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    /**
     * Appointment short description (deprecated, use `html_description_short`).
     *
     * @var string|null
     */
    public ?string $xml_description_short = null;

    /**
     * Special instructions (deprecated, use `html_special`).
     *
     * @var string|null
     */
    public ?string $xml_special = null;

    public function __construct(array $data)
    {
        $this->a_class_tab = isset($data['a_class_tab']) ? (array)$data['a_class_tab'] : null;
        $this->a_direct_link = isset($data['a_direct_link']) ? new ServiceList52GetResponseServiceDirectLink((array)$data['a_direct_link']) : null;
        $this->a_config = isset($data['a_config']) ? new ServiceList52GetResponseServiceConfig((array)$data['a_config']) : null;
        $this->a_image = isset($data['a_image']) ? new ServiceList52GetResponseServiceImage((array)$data['a_image']) : null;
        $this->a_login_type_restriction = isset($data['a_login_type_restriction']) ? (array)$data['a_login_type_restriction'] : null;
        $this->a_member_group_restriction = isset($data['a_member_group_restriction']) ? (array)$data['a_member_group_restriction'] : null;
        $this->f_deposit = isset($data['f_deposit']) ? (string)$data['f_deposit'] : null;
        $this->f_offline_max = isset($data['f_offline_max']) ? (string)$data['f_offline_max'] : null;
        $this->f_offline_min = isset($data['f_offline_min']) ? (string)$data['f_offline_min'] : null;
        $this->f_online = isset($data['f_online']) ? (string)$data['f_online'] : null;
        $this->hide_application = isset($data['hide_application']) ? (bool)$data['hide_application'] : null;
        $this->i_age_from = isset($data['i_age_from']) ? (int)$data['i_age_from'] : null;
        $this->i_age_to = isset($data['i_age_to']) ? (int)$data['i_age_to'] : null;
        $this->i_price = isset($data['i_price']) ? (int)$data['i_price'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->id_book_flow = isset($data['id_book_flow']) ? (int)$data['id_book_flow'] : null;
        $this->id_service_require = isset($data['id_service_require']) ? (int)$data['id_service_require'] : null;
        $this->is_age_public = isset($data['is_age_public']) ? (bool)$data['is_age_public'] : null;
        $this->is_age_restricted = isset($data['is_age_restricted']) ? (bool)$data['is_age_restricted'] : null;
        $this->is_back_to_back = isset($data['is_back_to_back']) ? (bool)$data['is_back_to_back'] : null;
        $this->is_bookable = isset($data['is_bookable']) ? (bool)$data['is_bookable'] : null;
        $this->is_book_repeat_client = isset($data['is_book_repeat_client']) ? (bool)$data['is_book_repeat_client'] : null;
        $this->is_book_repeat_no_end_date_appointment = isset($data['is_book_repeat_no_end_date_appointment']) ? (bool)$data['is_book_repeat_no_end_date_appointment'] : null;
        $this->is_deposit_percent = isset($data['is_deposit_percent']) ? (bool)$data['is_deposit_percent'] : null;
        $this->is_gender_select = isset($data['is_gender_select']) ? (bool)$data['is_gender_select'] : null;
        $this->is_online_sell = isset($data['is_online_sell']) ? (bool)$data['is_online_sell'] : null;
        $this->is_resource_type = isset($data['is_resource_type']) ? (bool)$data['is_resource_type'] : null;
        $this->is_single_buy = isset($data['is_single_buy']) ? (bool)$data['is_single_buy'] : null;
        $this->is_staff_confirm = isset($data['is_staff_confirm']) ? (bool)$data['is_staff_confirm'] : null;
        $this->is_staff_skip = isset($data['is_staff_skip']) ? (bool)$data['is_staff_skip'] : null;
        $this->is_question = isset($data['is_question']) ? (bool)$data['is_question'] : null;
        $this->is_virtual = isset($data['is_virtual']) ? (bool)$data['is_virtual'] : null;
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->k_service_category = isset($data['k_service_category']) ? (string)$data['k_service_category'] : null;
        $this->s_duration = isset($data['s_duration']) ? (string)$data['s_duration'] : null;
        $this->s_service = isset($data['s_service']) ? (string)$data['s_service'] : null;
        $this->text_age_restriction = isset($data['text_age_restriction']) ? (string)$data['text_age_restriction'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
        $this->xml_description_short = isset($data['xml_description_short']) ? (string)$data['xml_description_short'] : null;
        $this->xml_special = isset($data['xml_special']) ? (string)$data['xml_special'] : null;
    }
}
