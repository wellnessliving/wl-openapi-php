<?php
namespace WlSdk\Wl\Staff\StaffView;

class StaffView74GetResponseStaff
{
    /**
     * A list of locations keys where staff works.
     *
     * @var string[]|null
     */
    public ?array $a_location_work = null;

    /**
     * Staff's photo.
     *
     * @var StaffView74GetResponseStaffPhoto|null
     */
    public ?StaffView74GetResponseStaffPhoto $a_photo = null;

    /**
     * A description of the staff member. This description can include HTML tags.
     * Same as `s_biography` offset.
     *
     * @var string|null
     */
    public ?string $html_biography = null;

    /**
     * The first name of the staff.
     *
     * @var string|null
     */
    public ?string $html_first = null;

    /**
     * The last name of the staff.
     *
     * @var string|null
     */
    public ?string $html_last = null;

    /**
     * Name of the current staff location.
     *
     * @var string|null
     */
    public ?string $html_location_title = null;

    /**
     * The staff member's gender. One of the {@link \WlSdk\AGenderSid} constants.
     *
     * @var \WlSdk\AGenderSid|null
     */
    public ?\WlSdk\AGenderSid $id_gender = null;

    /**
     * `true` in case when staff provides classes/events in home location, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_classes_events = null;

    /**
     * Whether staff member should be published on business pages.
     *
     * @var bool|null
     */
    public ?bool $is_publish_business_page = null;

    /**
     * `true` in case when for schedule exists for staff, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_schedule_enabled = null;

    /**
     * Staff's current location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Staff key.  <b>Deprecated</b>, use `uid_staff` instead.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * A description of the staff member. This description can include HTML tags.
     * <b>Deprecated</b> use `html_biography` instead of this.
     *
     * @var string|null
     */
    public ?string $s_biography = null;

    /**
     * The staff member surname. If there are rights, the full surname, if not, then depending on the business
     * settings.
     *
     * @var string|null
     */
    public ?string $s_family = null;

    /**
     * The staff member first name. If there are rights, the full first name, if not, then depending on the
     * business settings.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * The staff member position in the organization.
     *
     * @var string|null
     */
    public ?string $s_position = null;

    /**
     * Name of the staff role.
     *
     * @var string|null
     */
    public ?string $text_business_role = null;

    /**
     * Full name of the staff according to business settings.
     *
     * @var string|null
     */
    public ?string $text_full_name = null;

    /**
     * The user ID. Each staff member in WellnessLiving can also access the system as a client of their business.
     * This is the ID number used to represent the staff member as a client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The staff user ID.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * URL to the schedule with this staff.
     *
     * @var string|null
     */
    public ?string $url_schedule = null;

    public function __construct(array $data)
    {
        $this->a_location_work = isset($data['a_location_work']) ? (array)$data['a_location_work'] : null;
        $this->a_photo = isset($data['a_photo']) ? new StaffView74GetResponseStaffPhoto((array)$data['a_photo']) : null;
        $this->html_biography = isset($data['html_biography']) ? (string)$data['html_biography'] : null;
        $this->html_first = isset($data['html_first']) ? (string)$data['html_first'] : null;
        $this->html_last = isset($data['html_last']) ? (string)$data['html_last'] : null;
        $this->html_location_title = isset($data['html_location_title']) ? (string)$data['html_location_title'] : null;
        $this->id_gender = isset($data['id_gender']) ? \WlSdk\AGenderSid::tryFrom((int)$data['id_gender']) : null;
        $this->is_classes_events = isset($data['is_classes_events']) ? (bool)$data['is_classes_events'] : null;
        $this->is_publish_business_page = isset($data['is_publish_business_page']) ? (bool)$data['is_publish_business_page'] : null;
        $this->is_schedule_enabled = isset($data['is_schedule_enabled']) ? (bool)$data['is_schedule_enabled'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->s_biography = isset($data['s_biography']) ? (string)$data['s_biography'] : null;
        $this->s_family = isset($data['s_family']) ? (string)$data['s_family'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->s_position = isset($data['s_position']) ? (string)$data['s_position'] : null;
        $this->text_business_role = isset($data['text_business_role']) ? (string)$data['text_business_role'] : null;
        $this->text_full_name = isset($data['text_full_name']) ? (string)$data['text_full_name'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->url_schedule = isset($data['url_schedule']) ? (string)$data['url_schedule'] : null;
    }
}
