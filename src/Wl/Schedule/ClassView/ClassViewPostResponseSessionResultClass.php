<?php
namespace WlSdk\Wl\Schedule\ClassView;

class ClassViewPostResponseSessionResultClass
{
    /**
     * Keys are class key.
     *   Values are class tab key.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * Class image data:
     *
     * @var ClassViewPostResponseSessionResultClassImage|null
     */
    public ?ClassViewPostResponseSessionResultClassImage $a_image = null;

    /**
     * List of search tags.
     *
     * @var ClassViewPostResponseSessionResultClassSearchTag|null
     */
    public ?ClassViewPostResponseSessionResultClassSearchTag $a_search_tag = null;

    /**
     * List of tags.
     *
     * @var int[]|null
     */
    public ?array $a_tag = null;

    /**
     * Whether current client can book class.
     *
     * @var bool|null
     */
    public ?bool $can_book = null;

    /**
     * Session date/time in UTC.
     *
     * @var string|null
     */
    public ?string $dt_date_global = null;

    /**
     * Start date in local time.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * Reason why client can not book class. Not empty only if `can_book` is `false`.
     *
     * @var string|null
     */
    public ?string $html_deny_reason = null;

    /**
     * Class description.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Special instructions.
     *
     * @var string|null
     */
    public ?string $html_special = null;

    /**
     * Timezone title.
     *
     * @var string|null
     */
    public ?string $text_timezone = null;

    /**
     * Age from that class is allowed. `null` if information is not available.
     *
     * @var int|null
     */
    public ?int $i_age_from = null;

    /**
     * Age to that class is allowed. `null` if information is not available.
     *
     * @var int|null
     */
    public ?int $i_age_to = null;

    /**
     * A total number of booked visits in the class, including all lists: active and waitlist.
     *
     * @var int|null
     */
    public ?int $i_book = null;

    /**
     * A total number of booked active visits in the class.
     *
     * @var int|null
     */
    public ?int $i_book_active = null;

    /**
     * Class capacity.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * Class duration. In number of minutes.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Limit of wait list. `null` if limit is not set.
     *
     * @var int|null
     */
    public ?int $i_wait_limit = null;

    /**
     * ID of deny reason. One of {@link \WlSdk\Wl\Schedule\ClassView\DenyReasonSid} constants.
     *
     * @var int|null
     */
    public ?int $id_deny_reason = null;

    /**
     * Whether current class was booked by current client.
     *
     * @var bool|null
     */
    public ?bool $is_book = null;

    /**
     * Allow clients to book on behalf of a guest.
     * `true` if clients can book on behalf of a guest.
     * `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_book_for_guest = null;

    /**
     * `true` if class period was cancelled; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_cancel = null;

    /**
     * `true` if it is event; `false` if it is class.
     *
     * @var bool|null
     */
    public ?bool $is_event = null;

    /**
     * `true` if this class can be paid with promotion only; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_promotion_only = null;

    /**
     * `true` if class is virtual, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * `true` if user can take place in wait list only; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_wait_list = null;

    /**
     * `true` if wait list is enabled for class; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_wait_list_enabled = null;

    /**
     * Off-site location asset key. Empty if off-site location is not assigned to this class.
     *
     * @var string|null
     */
    public ?string $k_resource_location = null;

    /**
     * Session price.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * Class duration. In human readable format.
     *
     * @var string|null
     */
    public ?string $s_duration = null;

    /**
     * Class name.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Class room.
     *
     * @var string|null
     */
    public ?string $text_room = null;

    public function __construct(array $data)
    {
        $this->a_class_tab = isset($data['a_class_tab']) ? (array)$data['a_class_tab'] : null;
        $this->a_image = isset($data['a_image']) ? new ClassViewPostResponseSessionResultClassImage((array)$data['a_image']) : null;
        $this->a_search_tag = isset($data['a_search_tag']) ? new ClassViewPostResponseSessionResultClassSearchTag((array)$data['a_search_tag']) : null;
        $this->a_tag = isset($data['a_tag']) ? (array)$data['a_tag'] : null;
        $this->can_book = isset($data['can_book']) ? (bool)$data['can_book'] : null;
        $this->dt_date_global = isset($data['dt_date_global']) ? (string)$data['dt_date_global'] : null;
        $this->dt_date_local = isset($data['dt_date_local']) ? (string)$data['dt_date_local'] : null;
        $this->html_deny_reason = isset($data['html_deny_reason']) ? (string)$data['html_deny_reason'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->html_special = isset($data['html_special']) ? (string)$data['html_special'] : null;
        $this->text_timezone = isset($data['text_timezone']) ? (string)$data['text_timezone'] : null;
        $this->i_age_from = isset($data['i_age_from']) ? (int)$data['i_age_from'] : null;
        $this->i_age_to = isset($data['i_age_to']) ? (int)$data['i_age_to'] : null;
        $this->i_book = isset($data['i_book']) ? (int)$data['i_book'] : null;
        $this->i_book_active = isset($data['i_book_active']) ? (int)$data['i_book_active'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_wait_limit = isset($data['i_wait_limit']) ? (int)$data['i_wait_limit'] : null;
        $this->id_deny_reason = isset($data['id_deny_reason']) ? (int)$data['id_deny_reason'] : null;
        $this->is_book = isset($data['is_book']) ? (bool)$data['is_book'] : null;
        $this->is_book_for_guest = isset($data['is_book_for_guest']) ? (bool)$data['is_book_for_guest'] : null;
        $this->is_cancel = isset($data['is_cancel']) ? (bool)$data['is_cancel'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->is_promotion_only = isset($data['is_promotion_only']) ? (bool)$data['is_promotion_only'] : null;
        $this->is_virtual = isset($data['is_virtual']) ? (bool)$data['is_virtual'] : null;
        $this->is_wait_list = isset($data['is_wait_list']) ? (bool)$data['is_wait_list'] : null;
        $this->is_wait_list_enabled = isset($data['is_wait_list_enabled']) ? (bool)$data['is_wait_list_enabled'] : null;
        $this->k_resource_location = isset($data['k_resource_location']) ? (string)$data['k_resource_location'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->s_duration = isset($data['s_duration']) ? (string)$data['s_duration'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_room = isset($data['text_room']) ? (string)$data['text_room'] : null;
    }
}
