<?php

namespace WlSdk\Wl\Schedule\Page;

/**
 * Response from GET
 */
class PageElementGetResponse
{
    /**
     * No description.
     *
     * @var PageElementGetResponseAppointmentVisitInfo[]|null
     */
    public ?array $a_appointment_visit_info = null;

    /**
     * No description.
     *
     * @var PageElementGetResponseAsset[]|null
     */
    public ?array $a_asset = null;

    /**
     * No description.
     *
     * @var PageElementGetResponseClassInfo[]|null
     */
    public ?array $a_class_info = null;

    /**
     * No description.
     *
     * @var PageElementGetResponseResourceImage[]|null
     */
    public ?array $a_resource_image = null;

    /**
     * No description.
     *
     * @var PageElementGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    /**
     * The latest date and time for when the visit can be canceled without penalty.
     *
     * @var string|null
     */
    public ?string $dt_cancel = null;

    /**
     * The date and time of the visit in UTC.
     *
     * @var string|null
     */
    public ?string $dt_date_global = null;

    /**
     * The date and time of the visit in the local time zone.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * Session date/time in timezone of the location where it takes place.
     *
     * @var string|null
     */
    public ?string $dtl_location = null;

    /**
     * The description of the service.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * The special instructions for the service.
     *
     * @var string|null
     */
    public ?string $html_special = null;

    /**
     * Capacity of the service.
     * `null` indicates that the capacity is not set.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * The scheduled duration of the visit.
     * `0` means that session duration is hidden.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Estimated place of reservation on the waiting list.
     *
     * @var int|null
     */
    public ?int $i_wait_spot = null;

    /**
     * The note type ID. This will be set to `null` if notes aren't allowed.
     * This is one of the {@link \WlSdk\Wl\Visit\Note\Sid\NoteSid} constants.
     *
     * This will be `null` if notes aren't allowed.
     *
     * @var int|null
     */
    public ?int $id_note = null;

    /**
     * The virtual provider ID. One of the {@link \WlSdk\Wl\Virtual\VirtualProviderSid} constants.
     *
     * This will be `null` for non-virtual services.
     *
     * @var int|null
     */
    public ?int $id_virtual_provider = null;

    /**
     * The visit type ID. One of the {@link \WlSdk\Wl\Visit\VisitSid} constants.
     *
     * This will be `null` if not loaded yet.
     *
     * @var int|null
     */
    public ?int $id_visit = null;

    /**
     * If `true`, then this visit is ready to be checked in. If `false`, then this visit can't be checked in.
     *
     * @var bool|null
     */
    public ?bool $is_checkin = null;

    /**
     * This will be `true` if clients can cancel the session. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_enable_client_cancel = null;

    /**
     * If `true`, then this visit is a part of a larger event. If `false`, then this visit is an individual
     * session.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * `true` - service is in progress; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_in_progress = null;

    /**
     * `true` - service is virtual; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * The appointment key.
     * This will be set only if the visit is an appointment.
     *
     * If the visit is a class or event, this will be `null`.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * The class key. This will be set only if the visit is a class or an event.
     * If the visit is an appointment, this will be `null`.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * The class period key. This will be set only if the visit is a class or an event.
     *
     * If the visit is an appointment, this will be `null`.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Resource key.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    /**
     * Session key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * The name of class or service.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Location title.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * Room where session takes place.
     *
     * @var string|null
     */
    public ?string $text_room = null;

    /**
     * Timezone abbreviation.
     *
     * @var string|null
     */
    public ?string $text_timezone = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * URL of the image representing the service or resource.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    /**
     * Url to wait page is the beginning of an online service.
     *
     * @var string|null
     */
    public ?string $url_virtual_join = null;

    public function __construct(array $data)
    {
        $this->a_appointment_visit_info = isset($data['a_appointment_visit_info']) ? array_map(static fn ($item) => new PageElementGetResponseAppointmentVisitInfo((array)$item), (array)$data['a_appointment_visit_info']) : null;
        $this->a_asset = isset($data['a_asset']) ? array_map(static fn ($item) => new PageElementGetResponseAsset((array)$item), (array)$data['a_asset']) : null;
        $this->a_class_info = isset($data['a_class_info']) ? array_map(static fn ($item) => new PageElementGetResponseClassInfo((array)$item), (array)$data['a_class_info']) : null;
        $this->a_resource_image = isset($data['a_resource_image']) ? array_map(static fn ($item) => new PageElementGetResponseResourceImage((array)$item), (array)$data['a_resource_image']) : null;
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn ($item) => new PageElementGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
        $this->dt_cancel = isset($data['dt_cancel']) ? (string)$data['dt_cancel'] : null;
        $this->dt_date_global = isset($data['dt_date_global']) ? (string)$data['dt_date_global'] : null;
        $this->dt_date_local = isset($data['dt_date_local']) ? (string)$data['dt_date_local'] : null;
        $this->dtl_location = isset($data['dtl_location']) ? (string)$data['dtl_location'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->html_special = isset($data['html_special']) ? (string)$data['html_special'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_wait_spot = isset($data['i_wait_spot']) ? (int)$data['i_wait_spot'] : null;
        $this->id_note = isset($data['id_note']) ? (int)$data['id_note'] : null;
        $this->id_virtual_provider = isset($data['id_virtual_provider']) ? (int)$data['id_virtual_provider'] : null;
        $this->id_visit = isset($data['id_visit']) ? (int)$data['id_visit'] : null;
        $this->is_checkin = isset($data['is_checkin']) ? (bool)$data['is_checkin'] : null;
        $this->is_enable_client_cancel = isset($data['is_enable_client_cancel']) ? (bool)$data['is_enable_client_cancel'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->is_in_progress = isset($data['is_in_progress']) ? (bool)$data['is_in_progress'] : null;
        $this->is_virtual = isset($data['is_virtual']) ? (bool)$data['is_virtual'] : null;
        $this->k_appointment = isset($data['k_appointment']) ? (string)$data['k_appointment'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_room = isset($data['text_room']) ? (string)$data['text_room'] : null;
        $this->text_timezone = isset($data['text_timezone']) ? (string)$data['text_timezone'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
        $this->url_virtual_join = isset($data['url_virtual_join']) ? (string)$data['url_virtual_join'] : null;
    }
}
