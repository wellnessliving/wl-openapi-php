<?php
namespace WlSdk\Wl\Book\Process\Info;

/**
 * Response from GET
 */
class InfoGetResponse
{
    /**
     * Week days available for recurring booking. Constants of {@link \WlSdk\ADateWeekSid} class.
     * 
     * `null` if recurring booking is not available.
     *
     * @var \WlSdk\ADateWeekSid[]|null
     */
    public ?array $a_day_available = null;

    /**
     * A list of all class sessions that can be booked together. Every element has the next structure:
     *
     * @var InfoGetResponseSessionAll[]|null
     */
    public ?array $a_session_all = null;

    /**
     * List of sessions that can be paid without new purchases.
     * Such as previously prepaid or free sessions.
     * 
     * A result of the RsBookProcess::sessionFreeGet() method execution.
     * 
     * Each its item has the key of following format: `dt_date::k_class_period` and
     * the value of following structure:
     *
     * @var InfoGetResponseSessionFree[]|null
     */
    public ?array $a_session_free = null;

    /**
     * The staff member conducting the session. Every element has the next structure:
     *
     * @var InfoGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    /**
     * Date when this class session occurrences stop.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * The date/time of the session the user is booking in MySQL format in the location's timezone.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * `true` if price for the individual session should be hidden, if client has applicable pricing option to pay
     * for this
     * booking.
     * `false` if price should be shown always.
     *
     * @var bool|null
     */
    public ?bool $hide_price = null;

    /**
     * The text of the contract to which the user must agree before book this session.
     * Not empty if business has contract and if user did not agree to this contract.
     *
     * @var string|null
     */
    public ?string $html_contract = null;

    /**
     * Class duration in human-readable format.
     *
     * @var string|null
     */
    public ?string $html_duration = null;

    /**
     * The special instructions for the class.
     *
     * @var string|null
     */
    public ?string $html_special = null;

    /**
     * Special instructions preview for class.
     *
     * @var string|null
     */
    public ?string $html_special_preview = null;

    /**
     * Number of available spots.
     * 
     * `null` if this information is not available.
     *
     * @var int|null
     */
    public ?int $i_available = null;

    /**
     * Number of booked spots.
     * 
     * `null` if this information is not available.
     *
     * @var int|null
     */
    public ?int $i_book = null;

    /**
     * The duration of the session in minutes.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Total number of clients on the wait list.
     *
     * @var int|null
     */
    public ?int $i_wait = null;

    /**
     * Total capacity the wait list.
     * `null` if wail list in unlimited.
     * `0` if wait list is disabled.
     *
     * @var int|null
     */
    public ?int $i_wait_limit = null;

    /**
     * Estimated place of reservation on the waiting list.
     *
     * @var int|null
     */
    public ?int $i_wait_spot = null;

    /**
     * `true` if recurring booking is available, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_book_repeat_client = null;

    /**
     * `true` if the setting for frequency during class recurring booking will be `never end` by default, `false`
     * otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_book_repeat_no_end_date = null;

    /**
     * Can client chooses several session per booking.
     *
     * @var bool|null
     */
    public ?bool $is_event_session = null;

    /**
     * `true` if need to display location phone number, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_location_phone = null;

    /**
     * `true` if event can be paid with pricing option only.
     * `false` if full event purchase or single session purchase are allowed.
     *
     * @var bool|null
     */
    public ?bool $is_promotion_only = null;

    /**
     * Whether the class can be paid with single session.
     *
     * @var bool|null
     */
    public ?bool $is_single_buy = null;

    /**
     * Whether the full text of the special instructions fits within the preview length or not.
     *
     * @var bool|null
     */
    public ?bool $is_special_preview = null;

    /**
     * `true` if class is virtual, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * Class period location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Price of the session.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * Whole event cost.
     *
     * @var string|null
     */
    public ?string $m_price_total = null;

    /**
     * Event price at an early discount.
     * 
     * An empty string if there is no discount.
     *
     * @var string|null
     */
    public ?string $m_price_total_early = null;

    /**
     * The class title.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * The location address.
     *
     * @var string|null
     */
    public ?string $s_location_address = null;

    /**
     * The location title.
     *
     * @var string|null
     */
    public ?string $s_location_title = null;

    /**
     * The time when the session takes place in the location's time zone. In format `hh:mm`.
     *
     * @var string|null
     */
    public ?string $s_time = null;

    /**
     * Location phone number.
     *
     * @var string|null
     */
    public ?string $text_location_phone = null;

    /**
     * Room where session takes place.
     *
     * @var string|null
     */
    public ?string $text_room = null;

    /**
     * Text representation of the list of staffs.
     * List of staff see `a_staff`.
     *
     * @var string|null
     */
    public ?string $text_staff = null;

    /**
     * Timezone abbreviation.
     *
     * @var string|null
     */
    public ?string $text_timezone = null;

    public function __construct(array $data)
    {
        $this->a_day_available = isset($data['a_day_available']) ? array_map(static fn($v) => \WlSdk\ADateWeekSid::tryFrom((int)$v), (array)$data['a_day_available']) : null;
        $this->a_session_all = isset($data['a_session_all']) ? array_map(static fn($item) => new InfoGetResponseSessionAll((array)$item), (array)$data['a_session_all']) : null;
        $this->a_session_free = isset($data['a_session_free']) ? array_map(static fn($item) => new InfoGetResponseSessionFree((array)$item), (array)$data['a_session_free']) : null;
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn($item) => new InfoGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dt_date_local = isset($data['dt_date_local']) ? (string)$data['dt_date_local'] : null;
        $this->hide_price = isset($data['hide_price']) ? (bool)$data['hide_price'] : null;
        $this->html_contract = isset($data['html_contract']) ? (string)$data['html_contract'] : null;
        $this->html_duration = isset($data['html_duration']) ? (string)$data['html_duration'] : null;
        $this->html_special = isset($data['html_special']) ? (string)$data['html_special'] : null;
        $this->html_special_preview = isset($data['html_special_preview']) ? (string)$data['html_special_preview'] : null;
        $this->i_available = isset($data['i_available']) ? (int)$data['i_available'] : null;
        $this->i_book = isset($data['i_book']) ? (int)$data['i_book'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_wait = isset($data['i_wait']) ? (int)$data['i_wait'] : null;
        $this->i_wait_limit = isset($data['i_wait_limit']) ? (int)$data['i_wait_limit'] : null;
        $this->i_wait_spot = isset($data['i_wait_spot']) ? (int)$data['i_wait_spot'] : null;
        $this->is_book_repeat_client = isset($data['is_book_repeat_client']) ? (bool)$data['is_book_repeat_client'] : null;
        $this->is_book_repeat_no_end_date = isset($data['is_book_repeat_no_end_date']) ? (bool)$data['is_book_repeat_no_end_date'] : null;
        $this->is_event_session = isset($data['is_event_session']) ? (bool)$data['is_event_session'] : null;
        $this->is_location_phone = isset($data['is_location_phone']) ? (bool)$data['is_location_phone'] : null;
        $this->is_promotion_only = isset($data['is_promotion_only']) ? (bool)$data['is_promotion_only'] : null;
        $this->is_single_buy = isset($data['is_single_buy']) ? (bool)$data['is_single_buy'] : null;
        $this->is_special_preview = isset($data['is_special_preview']) ? (bool)$data['is_special_preview'] : null;
        $this->is_virtual = isset($data['is_virtual']) ? (bool)$data['is_virtual'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->m_price_total = isset($data['m_price_total']) ? (string)$data['m_price_total'] : null;
        $this->m_price_total_early = isset($data['m_price_total_early']) ? (string)$data['m_price_total_early'] : null;
        $this->s_class = isset($data['s_class']) ? (string)$data['s_class'] : null;
        $this->s_location_address = isset($data['s_location_address']) ? (string)$data['s_location_address'] : null;
        $this->s_location_title = isset($data['s_location_title']) ? (string)$data['s_location_title'] : null;
        $this->s_time = isset($data['s_time']) ? (string)$data['s_time'] : null;
        $this->text_location_phone = isset($data['text_location_phone']) ? (string)$data['text_location_phone'] : null;
        $this->text_room = isset($data['text_room']) ? (string)$data['text_room'] : null;
        $this->text_staff = isset($data['text_staff']) ? (string)$data['text_staff'] : null;
        $this->text_timezone = isset($data['text_timezone']) ? (string)$data['text_timezone'] : null;
    }
}
