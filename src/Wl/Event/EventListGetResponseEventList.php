<?php

namespace WlSdk\Wl\Event;

class EventListGetResponseEventList
{
    /**
     * Information about age restrictions for this event, has the following structure:
     *
     * @var EventListGetResponseEventListAgeRestriction|null
     */
    public ?EventListGetResponseEventListAgeRestriction $a_age_restriction = null;

    /**
     * List of book now tags connected to this event.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * Data about logo of the event.
     *
     * @var array|null
     */
    public $a_logo = null;

    /**
     * List of scheduled sessions of the event.
     *
     * @var EventListGetResponseEventListSchedule[]|null
     */
    public ?array $a_schedule = null;

    /**
     * List of search tags connected to this event.
     *
     * @var EventListGetResponseEventListSearchTag[]|null
     */
    public ?array $a_search_tag = null;

    /**
     * Whether event can be booked or not.
     * * `true` - there are no restrictions to book this event in general.
     * * `false` - for some reason event cannot be booked.
     *
     * The reason can be found in the following fields:
     * * `html_reason`
     * * `id_reason`
     * * `sid_reason`
     *
     * This field can be used instead of `is_bookable`
     *  and covers a significant number of checks under its value.
     *
     * @var bool|null
     */
    public ?bool $can_book = null;

    /**
     * Whether current user can cancel already booked event.
     *
     * @var bool|null
     */
    public ?bool $can_cancel = null;

    /**
     * End date, when early bird price ends in `MySql` format.
     *
     * @var string|null
     */
    public ?string $dl_early = null;

    /**
     * End date of the scheduled session in `MySql` format.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Local date of the closest session of the event.
     *
     * @var string|null
     */
    public ?string $dl_session = null;

    /**
     * Start date of the scheduled sessions in `MySql` format.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Date of the closest session of the event.
     *
     * @var string|null
     */
    public ?string $dtu_session = null;

    /**
     * Reason why session can not be booked.
     * Not empty only if `is_bookable` is `false`.
     *
     * @var string|null
     */
    public ?string $html_reason = null;

    /**
     * Number of all sessions in the event.
     *
     * @var int|null
     */
    public ?int $i_session_all = null;

    /**
     * Number of future sessions in the event.
     *
     * @var int|null
     */
    public ?int $i_session_future = null;

    /**
     * Number of past sessions in the event.
     *
     * @var int|null
     */
    public ?int $i_session_past = null;

    /**
     * ID of deny reason.
     *
     * @var int|null
     */
    public ?int $id_reason = null;

    /**
     * Whether booking of this event restricted because of age rules for {@link \WlSdk\Wl\Event\EventList}.
     *
     * @var bool|null
     */
    public ?bool $is_age_restrict = null;

    /**
     * `true` if this event booking is restricted and restricted because of client's age only.
     * `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_age_restrict_only = null;

    /**
     * Whether the event is available for booking or not.
     * The flag refers to the Available/Unavailable filter.
     *
     * `null` if the field is not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_available = null;

    /**
     * Whether single sessions of the event can be booked.
     *
     * Depending on current backend/fronted status.
     *
     *
     * `true` - booking single sessions are not allowed.
     * `false` - booking single sessions are allowed.
     *
     * @var bool|null
     */
    public ?bool $is_block = null;

    /**
     * Allow clients to book on behalf of a guest.
     *
     * `true` if clients can book on behalf of a guest.
     * `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_book_for_guest = null;

    /**
     * Whether event is bookable.
     *
     * * `true` - there are no restrictions to book this event in general.
     * * `false` - for some reason event cannot be booked.
     *
     * <b>Attention!!!</b>
     *
     * Historically, the value of this field may not cover all expected checks,
     *  and may be confusing to someone.
     *
     * It is properly used in combination with a number of other flags.
     *
     * If you need a flag that covers most of the checks please
     *  use `can_book` field.
     *
     * @var bool|null
     */
    public ?bool $is_bookable = null;

    /**
     * Whether event is already booked.
     *
     * @var bool|null
     */
    public ?bool $is_booked = null;

    /**
     * `true` if clients can cancel this event. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_cancellation_enabled = null;

    /**
     * Whether booking of the event is closed already.
     * Means that in general it is bookable but currently booking is closed.
     *
     * @var bool|null
     */
    public ?bool $is_closed = null;

    /**
     * Whether event is full already.
     *
     * @var bool|null
     */
    public ?bool $is_full = null;

    /**
     * `true` if this class can be booked by any client; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_online = null;

    /**
     * `true` means to show class only for clients who can book online,
     * `false` means to show class for all clients.
     *
     * @var bool|null
     */
    public ?bool $is_online_private = null;

    /**
     * Whether event sessions can be booked after event has started.
     *
     * @var bool|null
     */
    public ?bool $is_open = null;

    /**
     * Whether clients of the business can pay for the event with purchase option only.
     *
     * `true` if event can be paid with purchase option only.
     * `false` if full event purchase or single session purchase are allowed.
     *
     * @var bool|null
     */
    public ?bool $is_promotion_only = null;

    /**
     * Whether event sessions can be booked partially.
     *
     * @var bool|null
     */
    public ?bool $is_prorate = null;

    /**
     * Whether class/event can be paid with single session.
     *
     * @var bool|null
     */
    public ?bool $is_single_buy = null;

    /**
     * Whether event is virtual.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * Class key.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Class period key of the closest session of the event.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * Key of enrollment block that corresponds to current row.
     *
     * @var string|null
     */
    public ?string $k_enrollment_block = null;

    /**
     * Location key of the closest session of the event.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Maximum price per session in the event.
     *
     * @var string|null
     */
    public ?string $m_price_max = null;

    /**
     * Minimum price per session in the event.
     *
     * @var string|null
     */
    public ?string $m_price_min = null;

    /**
     * Price of the entire event.
     *
     * @var string|null
     */
    public ?string $m_price_total = null;

    /**
     * Early bird price of the entire event.
     *
     * @var string|null
     */
    public ?string $m_price_total_early = null;

    /**
     * Code of `html_reason`. Is used for testing purposes.
     * Not empty only if `is_bookable` is `false`.
     *
     * @var string|null
     */
    public ?string $sid_reason = null;

    /**
     * Text message of the restriction based on age rules.
     *
     * @var bool|null
     */
    public ?bool $text_age_restrict = null;

    /**
     * Title of the event.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Link to the start of the booking wizard to book the closed session from this event or the entire event.
     *
     * Can be `null` if there is no available for booking sessions.
     *
     * @var string|null
     */
    public ?string $url_book = null;

    /**
     * Description of the event.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    public function __construct(array $data)
    {
        $this->a_age_restriction = isset($data['a_age_restriction']) ? new EventListGetResponseEventListAgeRestriction((array)$data['a_age_restriction']) : null;
        $this->a_class_tab = isset($data['a_class_tab']) ? (array)$data['a_class_tab'] : null;
        $this->a_logo = $data['a_logo'] ?? null;
        $this->a_schedule = isset($data['a_schedule']) ? array_map(static fn ($item) => new EventListGetResponseEventListSchedule((array)$item), (array)$data['a_schedule']) : null;
        $this->a_search_tag = isset($data['a_search_tag']) ? array_map(static fn ($item) => new EventListGetResponseEventListSearchTag((array)$item), (array)$data['a_search_tag']) : null;
        $this->can_book = isset($data['can_book']) ? (bool)$data['can_book'] : null;
        $this->can_cancel = isset($data['can_cancel']) ? (bool)$data['can_cancel'] : null;
        $this->dl_early = isset($data['dl_early']) ? (string)$data['dl_early'] : null;
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dl_session = isset($data['dl_session']) ? (string)$data['dl_session'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->dtu_session = isset($data['dtu_session']) ? (string)$data['dtu_session'] : null;
        $this->html_reason = isset($data['html_reason']) ? (string)$data['html_reason'] : null;
        $this->i_session_all = isset($data['i_session_all']) ? (int)$data['i_session_all'] : null;
        $this->i_session_future = isset($data['i_session_future']) ? (int)$data['i_session_future'] : null;
        $this->i_session_past = isset($data['i_session_past']) ? (int)$data['i_session_past'] : null;
        $this->id_reason = isset($data['id_reason']) ? (int)$data['id_reason'] : null;
        $this->is_age_restrict = isset($data['is_age_restrict']) ? (bool)$data['is_age_restrict'] : null;
        $this->is_age_restrict_only = isset($data['is_age_restrict_only']) ? (bool)$data['is_age_restrict_only'] : null;
        $this->is_available = isset($data['is_available']) ? (bool)$data['is_available'] : null;
        $this->is_block = isset($data['is_block']) ? (bool)$data['is_block'] : null;
        $this->is_book_for_guest = isset($data['is_book_for_guest']) ? (bool)$data['is_book_for_guest'] : null;
        $this->is_bookable = isset($data['is_bookable']) ? (bool)$data['is_bookable'] : null;
        $this->is_booked = isset($data['is_booked']) ? (bool)$data['is_booked'] : null;
        $this->is_cancellation_enabled = isset($data['is_cancellation_enabled']) ? (bool)$data['is_cancellation_enabled'] : null;
        $this->is_closed = isset($data['is_closed']) ? (bool)$data['is_closed'] : null;
        $this->is_full = isset($data['is_full']) ? (bool)$data['is_full'] : null;
        $this->is_online = isset($data['is_online']) ? (bool)$data['is_online'] : null;
        $this->is_online_private = isset($data['is_online_private']) ? (bool)$data['is_online_private'] : null;
        $this->is_open = isset($data['is_open']) ? (bool)$data['is_open'] : null;
        $this->is_promotion_only = isset($data['is_promotion_only']) ? (bool)$data['is_promotion_only'] : null;
        $this->is_prorate = isset($data['is_prorate']) ? (bool)$data['is_prorate'] : null;
        $this->is_single_buy = isset($data['is_single_buy']) ? (bool)$data['is_single_buy'] : null;
        $this->is_virtual = isset($data['is_virtual']) ? (bool)$data['is_virtual'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
        $this->k_enrollment_block = isset($data['k_enrollment_block']) ? (string)$data['k_enrollment_block'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->m_price_max = isset($data['m_price_max']) ? (string)$data['m_price_max'] : null;
        $this->m_price_min = isset($data['m_price_min']) ? (string)$data['m_price_min'] : null;
        $this->m_price_total = isset($data['m_price_total']) ? (string)$data['m_price_total'] : null;
        $this->m_price_total_early = isset($data['m_price_total_early']) ? (string)$data['m_price_total_early'] : null;
        $this->sid_reason = isset($data['sid_reason']) ? (string)$data['sid_reason'] : null;
        $this->text_age_restrict = isset($data['text_age_restrict']) ? (bool)$data['text_age_restrict'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_book = isset($data['url_book']) ? (string)$data['url_book'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
    }
}
