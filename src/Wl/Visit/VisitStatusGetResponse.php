<?php

namespace WlSdk\Wl\Visit;

/**
 * Response from GET
 */
class VisitStatusGetResponse
{
    /**
     * Information about whether the given user can cancel an online booking and what
     * consequences the cancellation would have:
     *
     * @var VisitStatusGetResponseCancel|null
     */
    public ?VisitStatusGetResponseCancel $a_cancel = null;

    /**
     * An array of service resources.
     *
     * The key refers to the `k_resource_type`.
     * The value is an array with the following key: `k_resource`. .
     * The array element contains a nested array with `i_index` and `i_quantity`. .
     *
     * This will be empty if not set yet.
     *
     * @var string[]|null
     */
    public ?array $a_resource = null;

    /**
     * An array of service resources.
     *
     * Contains an extended data set, as well as a different format than
     * [VisitStatusApi::$a_resource](/Wl/Visit/VisitStatus.json).
     *
     * Each element contains the following set of data:
     *
     * @var VisitStatusGetResponseResourceAlias[]|null
     */
    public ?array $a_resource_alias = null;

    /**
     * The list of keys of staff members that conduct the class.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * The list of user IDs of staff members that conduct the class.
     *
     * @var string[]|null
     */
    public ?array $a_uid_staff = null;

    /**
     * The visit date and time in UTC and in MySQL format.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * The visit date in the location's time zone and in MySQL format.
     *
     * @var string|null
     */
    public ?string $dtl_date = null;

    /**
     * The service duration (in minutes).
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * The client's place in a waiting list.
     *
     * @var int|null
     */
    public ?int $i_wait_spot = null;

    /**
     * The source of the visit or the visit change.
     * One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
     * If you're unsure about the value to use, keep the default value.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * The status of the visit.
     * One of the {@link \WlSdk\Wl\Visit\VisitSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitSid
     */
    public ?int $id_visit = null;

    /**
     * Determines whether the visit is from an event.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * Whether this visit is requested and requires staff confirmation.
     *
     * * `true` - visit is requested.
     * * `false` - visit is confirmed or denied or this is a system request.
     *
     * @var bool|null
     */
    public ?bool $is_request = null;

    /**
     * The class key.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * The class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The key of the location where visit provides.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The service key.
     * If 'null', the visit isn't from an appointment.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * The key of the staff providing the appointment.
     * If `null`, the visit isn't from an appointment (for example, the visit is from an asset).
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * The .ics file for adding the service to a phone calendar.
     *
     * @var string|null
     */
    public ?string $s_calendar_file_content = null;

    /**
     * The text abbreviation of the time zone.
     *
     * @var string|null
     */
    public ?string $text_abbr_timezone = null;

    /**
     * The full address of the location for the visit (not the name of the location).
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * The full name of the staff member who conducts this visit.
     * If there are several staff members conducting the visit, their names will all be listed and separated by
     * commas.
     *
     * @var string|null
     */
    public ?string $text_staff = null;

    /**
     * The service title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * User key who made a visit.
     * `null` for a guest visit.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The ID of the user who is the staff providing the appointment.
     * If `null`, the visit isn't from an appointment (for example, the visit is from an asset).
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * The direct link to start class/event booking on the WellnessLiving website.
     * `null` for appointments/events/gym visits.
     *
     * @var string|null
     */
    public ?string $url_book_referral = null;

    /**
     * The shortened direct link to start class/event booking on the WellnessLiving website.
     * `null` for appointments/events/gym visits.
     *
     * @var string|null
     */
    public ?string $url_book_referral_short = null;

    /**
     * URL of virtual service. Empty if the visit is not virtual.
     *
     * @var string|null
     */
    public ?string $url_virtual_service = null;

    public function __construct(array $data)
    {
        $this->a_cancel = isset($data['a_cancel']) ? new VisitStatusGetResponseCancel((array)$data['a_cancel']) : null;
        $this->a_resource = isset($data['a_resource']) ? (array)$data['a_resource'] : null;
        $this->a_resource_alias = isset($data['a_resource_alias']) ? array_map(static fn ($item) => new VisitStatusGetResponseResourceAlias((array)$item), (array)$data['a_resource_alias']) : null;
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
        $this->a_uid_staff = isset($data['a_uid_staff']) ? (array)$data['a_uid_staff'] : null;
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->dtl_date = isset($data['dtl_date']) ? (string)$data['dtl_date'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_wait_spot = isset($data['i_wait_spot']) ? (int)$data['i_wait_spot'] : null;
        $this->id_mode = isset($data['id_mode']) ? (int)$data['id_mode'] : null;
        $this->id_visit = isset($data['id_visit']) ? (int)$data['id_visit'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->is_request = isset($data['is_request']) ? (bool)$data['is_request'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->s_calendar_file_content = isset($data['s_calendar_file_content']) ? (string)$data['s_calendar_file_content'] : null;
        $this->text_abbr_timezone = isset($data['text_abbr_timezone']) ? (string)$data['text_abbr_timezone'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_staff = isset($data['text_staff']) ? (string)$data['text_staff'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->url_book_referral = isset($data['url_book_referral']) ? (string)$data['url_book_referral'] : null;
        $this->url_book_referral_short = isset($data['url_book_referral_short']) ? (string)$data['url_book_referral_short'] : null;
        $this->url_virtual_service = isset($data['url_virtual_service']) ? (string)$data['url_virtual_service'] : null;
    }
}
