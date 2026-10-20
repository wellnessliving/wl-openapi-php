<?php

namespace WlSdk\Wl\Schedule\ClassView;

class ClassViewGetResponseSessionResultClass
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
     * @var ClassViewGetResponseSessionResultClassImage|null
     */
    public ?ClassViewGetResponseSessionResultClassImage $a_image = null;

    /**
     * List of search tags.
     *
     * @var ClassViewGetResponseSessionResultClassSearchTag|null
     */
    public ?ClassViewGetResponseSessionResultClassSearchTag $a_search_tag = null;

    /**
     * List of tags.
     *
     * @var int[]|null
     */
    public ?array $a_tag = null;

    /**
     * Ticket options available for booking the event. Empty if the event is not a ticketed event.
     *
     * Each element has `k_ticket_option`, `m_price`, `m_price_early` and `text_title` keys. `m_price_early` is
     * taken from the settings of the event, and is returned even when the early bird period is over:
     * the client decides whether to apply it, see `dt_early` and `s_timezone_location`.
     *
     * @var ClassViewGetResponseSessionResultClassTickets|null
     */
    public ?ClassViewGetResponseSessionResultClassTickets $a_tickets = null;

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
     * The last date when the early bird price is applied, in MySQL date format, the date itself included. `null`
     * if the event has no early bird. The early bird price applies while the current date in the timezone
     * `s_timezone_location` is not later than this date.
     *
     * @var string|null
     */
    public ?string $dt_early = null;

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
     * The minimum age restriction. Deprecated and is left only for back compatibility.
     *
     * @var int|null
     */
    public ?int $i_age_from = null;

    /**
     * The minimum age restriction (months).
     *
     * @var int|null
     */
    public ?int $i_age_from_month = null;

    /**
     * The minimum age restriction (years).
     *
     * @var int|null
     */
    public ?int $i_age_from_year = null;

    /**
     * The maximum age restriction. Deprecated and is left only for back compatibility.
     *
     * @var int|null
     */
    public ?int $i_age_to = null;

    /**
     * The maximum age restriction (months).
     *
     * @var int|null
     */
    public ?int $i_age_to_month = null;

    /**
     * The maximum age restriction (years).
     *
     * @var int|null
     */
    public ?int $i_age_to_year = null;

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
     * Number of usages of promotion required to pay for a single class session.
     *
     * @var int|null
     */
    public ?int $i_visit = null;

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
     * @see \WlSdk\Wl\Schedule\ClassView\DenyReasonSid
     */
    public ?int $id_deny_reason = null;

    /**
     * `true` if the event is a block event: all its sessions are booked together. `false` for a non-block event
     * and for a class. Makes sense only if `is_event` is `true`.
     *
     * @var bool|null
     */
    public ?bool $is_block = null;

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
     * `true` if clients can cancel this session. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_cancellation_enabled = null;

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
     * `true` if the event is a ticketed event; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_ticket = null;

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
     * Identifier of the timezone of the location of the session (for example `America/New_York`). Unlike
     * `text_timezone`, it never depends on the timezone of the client. Use it to find out whether the
     * early bird price is still applied, see `dt_early`.
     *
     * @var string|null
     */
    public ?string $s_timezone_location = null;

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
        $this->a_image = isset($data['a_image']) ? new ClassViewGetResponseSessionResultClassImage((array)$data['a_image']) : null;
        $this->a_search_tag = isset($data['a_search_tag']) ? new ClassViewGetResponseSessionResultClassSearchTag((array)$data['a_search_tag']) : null;
        $this->a_tag = isset($data['a_tag']) ? (array)$data['a_tag'] : null;
        $this->a_tickets = isset($data['a_tickets']) ? new ClassViewGetResponseSessionResultClassTickets((array)$data['a_tickets']) : null;
        $this->can_book = isset($data['can_book']) ? (bool)$data['can_book'] : null;
        $this->dt_date_global = isset($data['dt_date_global']) ? (string)$data['dt_date_global'] : null;
        $this->dt_date_local = isset($data['dt_date_local']) ? (string)$data['dt_date_local'] : null;
        $this->dt_early = isset($data['dt_early']) ? (string)$data['dt_early'] : null;
        $this->html_deny_reason = isset($data['html_deny_reason']) ? (string)$data['html_deny_reason'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->html_special = isset($data['html_special']) ? (string)$data['html_special'] : null;
        $this->text_timezone = isset($data['text_timezone']) ? (string)$data['text_timezone'] : null;
        $this->i_age_from = isset($data['i_age_from']) ? (int)$data['i_age_from'] : null;
        $this->i_age_from_month = isset($data['i_age_from_month']) ? (int)$data['i_age_from_month'] : null;
        $this->i_age_from_year = isset($data['i_age_from_year']) ? (int)$data['i_age_from_year'] : null;
        $this->i_age_to = isset($data['i_age_to']) ? (int)$data['i_age_to'] : null;
        $this->i_age_to_month = isset($data['i_age_to_month']) ? (int)$data['i_age_to_month'] : null;
        $this->i_age_to_year = isset($data['i_age_to_year']) ? (int)$data['i_age_to_year'] : null;
        $this->i_book = isset($data['i_book']) ? (int)$data['i_book'] : null;
        $this->i_book_active = isset($data['i_book_active']) ? (int)$data['i_book_active'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_visit = isset($data['i_visit']) ? (int)$data['i_visit'] : null;
        $this->i_wait_limit = isset($data['i_wait_limit']) ? (int)$data['i_wait_limit'] : null;
        $this->id_deny_reason = isset($data['id_deny_reason']) ? (int)$data['id_deny_reason'] : null;
        $this->is_block = isset($data['is_block']) ? (bool)$data['is_block'] : null;
        $this->is_book = isset($data['is_book']) ? (bool)$data['is_book'] : null;
        $this->is_book_for_guest = isset($data['is_book_for_guest']) ? (bool)$data['is_book_for_guest'] : null;
        $this->is_cancel = isset($data['is_cancel']) ? (bool)$data['is_cancel'] : null;
        $this->is_cancellation_enabled = isset($data['is_cancellation_enabled']) ? (bool)$data['is_cancellation_enabled'] : null;
        $this->is_event = isset($data['is_event']) ? (bool)$data['is_event'] : null;
        $this->is_promotion_only = isset($data['is_promotion_only']) ? (bool)$data['is_promotion_only'] : null;
        $this->is_ticket = isset($data['is_ticket']) ? (bool)$data['is_ticket'] : null;
        $this->is_virtual = isset($data['is_virtual']) ? (bool)$data['is_virtual'] : null;
        $this->is_wait_list = isset($data['is_wait_list']) ? (bool)$data['is_wait_list'] : null;
        $this->is_wait_list_enabled = isset($data['is_wait_list_enabled']) ? (bool)$data['is_wait_list_enabled'] : null;
        $this->k_resource_location = isset($data['k_resource_location']) ? (string)$data['k_resource_location'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->s_duration = isset($data['s_duration']) ? (string)$data['s_duration'] : null;
        $this->s_timezone_location = isset($data['s_timezone_location']) ? (string)$data['s_timezone_location'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_room = isset($data['text_room']) ? (string)$data['text_room'] : null;
    }
}
