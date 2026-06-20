<?php

namespace WlSdk\Wl\Schedule\ClassList;

class ClassListGetResponseSession
{
    /**
     * Keys of class tab.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * The class image. Empty array if there is no image.
     *
     * @var string[]|null
     */
    public ?array $a_image = null;

    /**
     * Tags associated with an individual class.
     *
     * @var string[]|null
     */
    public ?array $a_search_tag = null;

    /**
     * The list of staff keys for the staff member conducting the session.
     * For legacy third-party apps listed in `APPS_USE_OLD_K_STAFF`,
     * contains  `k_staff` for backward compatibility.
     * Empty for all other applications. Use `a_staff_uid` instead.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * The list of staff user keys for the staff member conducting the session.
     *
     * @var string[]|null
     */
    public ?array $a_staff_uid = null;

    /**
     * The list of virtual locations keys. Each value is a location key.
     *
     * @var string[]|null
     */
    public ?array $a_virtual_location = null;

    /**
     * The date/time of the session start in UTC.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * The time of the session start in the local time zone.
     *
     * @var string|null
     */
    public ?string $dt_time = null;

    /**
     * The date/time of session start in the location's time zone.
     *
     * @var string|null
     */
    public ?string $dtl_date = null;

    /**
     * Specifies whether the class will be hidden in the White Label Achieve Client App. If `true`, it means that
     * the
     *  class won't be displayed. Otherwise, this will be `false` to indicate that the class will be displayed.
     *
     * @var bool|null
     */
    public ?bool $hide_application = null;

    /**
     * The class description.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Count of visits on this class.
     *
     * @var int|null
     */
    public ?int $i_book = null;

    /**
     * The capacity of the service. 'null' indicates that the capacity is not set.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * The day of the week when session is occurred. Constant from {@link \WlSdk\ADateWeekSid}.
     *
     * @var int|null
     */
    public ?int $i_day = null;

    /**
     * The duration of the session in minutes.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Number of clients in wait list.
     *
     * @var int|null
     */
    public ?int $i_wait = null;

    /**
     * Allow clients to book on behalf of a guest.
     *      `true` if clients can book on behalf of a guest.
     *  `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_book_for_guest = null;

    /**
     * If `true`, this class period was canceled. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_cancel = null;

    /**
     * If `true`, this is an event. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * If `true`, this class is virtual. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * This will be `true` if user is only on the wait-list. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_wait_list_enabled = null;

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
     * The key of the session's location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The title of the session.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * The direct link to start booking on the WellnessLiving website.
     *
     * @var string|null
     */
    public ?string $url_book = null;

    public function __construct(array $data)
    {
        $this->a_class_tab = isset($data['a_class_tab']) ? (array)$data['a_class_tab'] : null;
        $this->a_image = isset($data['a_image']) ? (array)$data['a_image'] : null;
        $this->a_search_tag = isset($data['a_search_tag']) ? (array)$data['a_search_tag'] : null;
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
        $this->a_staff_uid = isset($data['a_staff_uid']) ? (array)$data['a_staff_uid'] : null;
        $this->a_virtual_location = isset($data['a_virtual_location']) ? (array)$data['a_virtual_location'] : null;
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->dt_time = isset($data['dt_time']) ? (string)$data['dt_time'] : null;
        $this->dtl_date = isset($data['dtl_date']) ? (string)$data['dtl_date'] : null;
        $this->hide_application = isset($data['hide_application']) ? (bool)$data['hide_application'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->i_book = isset($data['i_book']) ? (int)$data['i_book'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_day = isset($data['i_day']) ? (int)$data['i_day'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_wait = isset($data['i_wait']) ? (int)$data['i_wait'] : null;
        $this->is_book_for_guest = isset($data['is_book_for_guest']) ? (bool)$data['is_book_for_guest'] : null;
        $this->is_cancel = isset($data['is_cancel']) ? (bool)$data['is_cancel'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->is_virtual = isset($data['is_virtual']) ? (bool)$data['is_virtual'] : null;
        $this->is_wait_list_enabled = isset($data['is_wait_list_enabled']) ? (bool)$data['is_wait_list_enabled'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->url_book = isset($data['url_book']) ? (string)$data['url_book'] : null;
    }
}
