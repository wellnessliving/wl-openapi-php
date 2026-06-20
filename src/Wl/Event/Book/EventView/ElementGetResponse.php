<?php
namespace WlSdk\Wl\Event\Book\EventView;

/**
 * Response from GET
 */
class ElementGetResponse
{
    /**
     * Displays information about age restrictions for this event.
     * 
     * An empty array if there are no age restrictions.
     *
     * @var ElementGetResponseAgeRestrictions|null
     */
    public ?ElementGetResponseAgeRestrictions $a_age_restrictions = null;

    /**
     * Retrieves information about an event item.
     * 
     * Received only if `k_event` has been specified.
     * In this case, other fields aren't receivers.
     *
     * @var ElementGetResponseBookAvailable[]|null
     */
    public ?array $a_book_available = null;

    /**
     * Business policies connected to clients and bookings.
     * 
     * Contains the same structure as [BusinessConfigApi](/Wl/Business/Config/BusinessConfig.json).
     * 
     * If the event has custom overrides, those policies are used; otherwise, the default
     *  business policies are returned.
     *
     * @var ElementGetResponseBusinessPolicy|null
     */
    public ?ElementGetResponseBusinessPolicy $a_business_policy = null;

    /**
     * The logo of event.
     *
     * @var ElementGetResponseClassLogo|null
     */
    public ?ElementGetResponseClassLogo $a_class_logo = null;

    /**
     * The list of keys from class tab.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * Information for a large number of events.
     * 
     * Received only if `s_event` has been specified. In this case, other fields are not populated.
     * 
     * Key is the event class key.
     * Value has the same structure as the return value of `_get()`.
     *
     * @var ElementGetResponseEvent[]|null
     */
    public ?array $a_event = null;

    /**
     * A list of installment plans. Each element has the following next keys:
     *
     * @var ElementGetResponseInstallmentTemplate[]|null
     */
    public ?array $a_installment_template = null;

    /**
     * A list of event sessions. Every element has the following next keys:
     *
     * @var ElementGetResponseSchedule[]|null
     */
    public ?array $a_schedule = null;

    /**
     * IDs of online store category.
     *
     * @var string[]|null
     */
    public ?array $a_shop_category = null;

    /**
     * Photos of staff members. Keys are the keys of staff members. The values are the following:
     *
     * @var ElementGetResponseStaffLogo|null
     */
    public ?ElementGetResponseStaffLogo $a_staff_logo = null;

    /**
     * Timezone information for all timezones used in the event schedule.
     * 
     * Key is the timezone key. Primary key in the `a_geo_timezone` table.
     * Value contains timezone information from the geo timezone registry:
     *
     * @var ElementGetResponseTimezoneInfo[]|null
     */
    public ?array $a_timezone_info = null;

    /**
     * A list of classes and events that clients should attend before this one.
     *
     * @var ElementGetResponseVisitsRequired[]|null
     */
    public ?array $a_visits_required = null;

    /**
     * That date that should be used to go to the booking wizard.
     *
     * @var string|null
     */
    public ?string $dt_book_date = null;

    /**
     * The early registration date of the event.
     *
     * @var string|null
     */
    public ?string $dt_early = null;

    /**
     * The end date of the event.
     *
     * @var string|null
     */
    public ?string $dt_end = null;

    /**
     * The start date of the event.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * Whether event will be hidden in the White Label mobile application.
     * `true` means that event will not be displayed, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $hide_application = null;

    /**
     * The description of the event.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Special instruction for the event.
     *
     * @var string|null
     */
    public ?string $html_special = null;

    /**
     * Class capacity.
     * 
     * `null` if no set.
     *
     * @var int|null
     */
    public ?int $i_capacity = null;

    /**
     * The session count.
     *
     * @var int|null
     */
    public ?int $i_session = null;

    /**
     * The remaining session count.
     *
     * @var int|null
     */
    public ?int $i_session_remain = null;

    /**
     * The purchase rule ID.
     * One of the [RequirePaySid](#/components/schemas/Wl.Classes.RequirePaySid) constants.
     *
     * @var int|null
     */
    public ?int $id_pay_require = null;

    /**
     * Default required value for [RequirePaySid::ADVANCE](#/components/schemas/Wl.Classes.RequirePaySid) payment
     * mode,
     *  one of [RequirePaySid::ONLINE](#/components/schemas/Wl.Classes.RequirePaySid) or
     * [RequirePaySid::VISIT](#/components/schemas/Wl.Classes.RequirePaySid).
     * 
     * `null` means default value not selected.
     *
     * @var int|null
     */
    public ?int $id_pay_require_option = null;

    /**
     * The virtual provider ID. One of the [VirtualProviderSid](#/components/schemas/Wl.Virtual.VirtualProviderSid)
     * constants.
     * 
     * `null` if an in-person event.
     *
     * @var int|null
     */
    public ?int $id_virtual_provider = null;

    /**
     * Whether the event is age restricted.
     * `true` if the event is age restricted, `false` if the event is not.
     *
     * @var bool|null
     */
    public ?bool $is_age_restrict = null;

    /**
     * `true` if the event availability was checked; `false` if the event has too many sessions, and calculating
     *  the availability of each one takes a lot of time.
     *
     * @var bool|null
     */
    public ?bool $is_availability_checked = null;

    /**
     * `true` if the event is already booked; `false` if the event isn't booked.
     *
     * @var bool|null
     */
    public ?bool $is_book = null;

    /**
     * `true` If the event is bookable; `false` if the event isn't bookable.
     *
     * @var bool|null
     */
    public ?bool $is_bookable = null;

    /**
     * `true` if there are no free spots in the event; booking is available only into the wait list.
     * `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_full = null;

    /**
     * `true` if the selected session can be a make up session.
     * `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_makeup = null;

    /**
     * `true` if the selected session has already started and do not available to book.
     * `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_past = null;

    /**
     * `true` if the `a_business_policy` contains the custom policies from the event.
     * `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_policy_custom = null;

    /**
     * `true` if the event can be paid with a Purchase Option only.
     * `false` if full event purchases or single session purchases are permitted.
     *
     * @var bool|null
     */
    public ?bool $is_promotion_only = null;

    /**
     * `true` if clients, when they book event, which has been started, can pay only for the sessions in the
     * future.
     * `false` if clients, when they book event, have to pay for the entire event and the number of lefts in the
     * future sessions
     * does not matter.
     *
     * @var bool|null
     */
    public ?bool $is_prorate = null;

    /**
     * Determines whether this event allows paying for a single session.
     *
     * @var bool|null
     */
    public ?bool $is_single_session_buy = null;

    /**
     * `true` if event is virtual; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * The ID of the session which should be used to go to the booking wizard.
     *
     * @var string|null
     */
    public ?string $k_book_class_period = null;

    /**
     * The price of a single session of the event.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The price of the all sessions of the event.
     *
     * @var string|null
     */
    public ?string $m_price_total = null;

    /**
     * Price of the full event should be used as full price while `dt_early` is actual.
     *
     * @var string|null
     */
    public ?string $m_price_total_early = null;

    /**
     * The reason why the event can't be booked.
     * Empty if `k_book_class_period` isn't empty.
     *
     * @var string|null
     */
    public ?string $s_deny_reason = null;

    /**
     * The title of the event.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * `true` if special instructions can be public,
     * `false` if they should be shown only to the clients, who booked the class.
     *
     * @var bool|null
     */
    public ?bool $show_special_instructions = null;

    /**
     * End date of the event in user-friendly format.
     *
     * @var string|null
     */
    public ?string $text_end = null;

    /**
     * Start date of the event in user-friendly format.
     *
     * @var string|null
     */
    public ?string $text_start = null;

    /**
     * Link to the start of the booking wizard to book the closed session from this event or the entire event.
     * 
     * Can be `null` if there is no available for booking sessions.
     *
     * @var string|null
     */
    public ?string $url_book = null;

    /**
     * The description of the event.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    public function __construct(array $data)
    {
        $this->a_age_restrictions = isset($data['a_age_restrictions']) ? new ElementGetResponseAgeRestrictions((array)$data['a_age_restrictions']) : null;
        $this->a_book_available = isset($data['a_book_available']) ? array_map(static fn($item) => new ElementGetResponseBookAvailable((array)$item), (array)$data['a_book_available']) : null;
        $this->a_business_policy = isset($data['a_business_policy']) ? new ElementGetResponseBusinessPolicy((array)$data['a_business_policy']) : null;
        $this->a_class_logo = isset($data['a_class_logo']) ? new ElementGetResponseClassLogo((array)$data['a_class_logo']) : null;
        $this->a_class_tab = isset($data['a_class_tab']) ? (array)$data['a_class_tab'] : null;
        $this->a_event = isset($data['a_event']) ? array_map(static fn($item) => new ElementGetResponseEvent((array)$item), (array)$data['a_event']) : null;
        $this->a_installment_template = isset($data['a_installment_template']) ? array_map(static fn($item) => new ElementGetResponseInstallmentTemplate((array)$item), (array)$data['a_installment_template']) : null;
        $this->a_schedule = isset($data['a_schedule']) ? array_map(static fn($item) => new ElementGetResponseSchedule((array)$item), (array)$data['a_schedule']) : null;
        $this->a_shop_category = isset($data['a_shop_category']) ? (array)$data['a_shop_category'] : null;
        $this->a_staff_logo = isset($data['a_staff_logo']) ? new ElementGetResponseStaffLogo((array)$data['a_staff_logo']) : null;
        $this->a_timezone_info = isset($data['a_timezone_info']) ? array_map(static fn($item) => new ElementGetResponseTimezoneInfo((array)$item), (array)$data['a_timezone_info']) : null;
        $this->a_visits_required = isset($data['a_visits_required']) ? array_map(static fn($item) => new ElementGetResponseVisitsRequired((array)$item), (array)$data['a_visits_required']) : null;
        $this->dt_book_date = isset($data['dt_book_date']) ? (string)$data['dt_book_date'] : null;
        $this->dt_early = isset($data['dt_early']) ? (string)$data['dt_early'] : null;
        $this->dt_end = isset($data['dt_end']) ? (string)$data['dt_end'] : null;
        $this->dt_start = isset($data['dt_start']) ? (string)$data['dt_start'] : null;
        $this->hide_application = isset($data['hide_application']) ? (bool)$data['hide_application'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->html_special = isset($data['html_special']) ? (string)$data['html_special'] : null;
        $this->i_capacity = isset($data['i_capacity']) ? (int)$data['i_capacity'] : null;
        $this->i_session = isset($data['i_session']) ? (int)$data['i_session'] : null;
        $this->i_session_remain = isset($data['i_session_remain']) ? (int)$data['i_session_remain'] : null;
        $this->id_pay_require = isset($data['id_pay_require']) ? (int)$data['id_pay_require'] : null;
        $this->id_pay_require_option = isset($data['id_pay_require_option']) ? (int)$data['id_pay_require_option'] : null;
        $this->id_virtual_provider = isset($data['id_virtual_provider']) ? (int)$data['id_virtual_provider'] : null;
        $this->is_age_restrict = isset($data['is_age_restrict']) ? (bool)$data['is_age_restrict'] : null;
        $this->is_availability_checked = isset($data['is_availability_checked']) ? (bool)$data['is_availability_checked'] : null;
        $this->is_book = isset($data['is_book']) ? (bool)$data['is_book'] : null;
        $this->is_bookable = isset($data['is_bookable']) ? (bool)$data['is_bookable'] : null;
        $this->is_full = isset($data['is_full']) ? (bool)$data['is_full'] : null;
        $this->is_makeup = isset($data['is_makeup']) ? (bool)$data['is_makeup'] : null;
        $this->is_past = isset($data['is_past']) ? (bool)$data['is_past'] : null;
        $this->is_policy_custom = isset($data['is_policy_custom']) ? (bool)$data['is_policy_custom'] : null;
        $this->is_promotion_only = isset($data['is_promotion_only']) ? (bool)$data['is_promotion_only'] : null;
        $this->is_prorate = isset($data['is_prorate']) ? (bool)$data['is_prorate'] : null;
        $this->is_single_session_buy = isset($data['is_single_session_buy']) ? (bool)$data['is_single_session_buy'] : null;
        $this->is_virtual = isset($data['is_virtual']) ? (bool)$data['is_virtual'] : null;
        $this->k_book_class_period = isset($data['k_book_class_period']) ? (string)$data['k_book_class_period'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->m_price_total = isset($data['m_price_total']) ? (string)$data['m_price_total'] : null;
        $this->m_price_total_early = isset($data['m_price_total_early']) ? (string)$data['m_price_total_early'] : null;
        $this->s_deny_reason = isset($data['s_deny_reason']) ? (string)$data['s_deny_reason'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->show_special_instructions = isset($data['show_special_instructions']) ? (bool)$data['show_special_instructions'] : null;
        $this->text_end = isset($data['text_end']) ? (string)$data['text_end'] : null;
        $this->text_start = isset($data['text_start']) ? (string)$data['text_start'] : null;
        $this->url_book = isset($data['url_book']) ? (string)$data['url_book'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
    }
}
