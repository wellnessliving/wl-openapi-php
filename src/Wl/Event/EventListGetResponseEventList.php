<?php

namespace WlSdk\Wl\Event;

class EventListGetResponseEventList
{
    /**
     * No description.
     *
     * @var EventListGetResponseEventListAgeRestriction[]|null
     */
    public ?array $a_age_restriction = null;

    /**
     * No description.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * No description.
     *
     * @var EventListGetResponseEventListLogoA[]|EventListGetResponseEventListLogoB[]|EventListGetResponseEventListLogoC[]|null
     */
    public ?array $a_logo = null;

    /**
     * No description.
     *
     * @var EventListGetResponseEventListSchedule[]|null
     */
    public ?array $a_schedule = null;

    /**
     * No description.
     *
     * @var EventListGetResponseEventListSearchTag[]|null
     */
    public ?array $a_search_tag = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $can_book = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $can_cancel = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $dl_early = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $dl_session = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $dtu_session = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $html_reason = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $i_session_all = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $i_session_future = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $i_session_past = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $id_reason = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_age_restrict = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_age_restrict_only = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_available = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_block = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_book_for_guest = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_bookable = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_booked = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_closed = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_full = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_online = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_online_private = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_open = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_promotion_only = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_prorate = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_single_buy = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $k_enrollment_block = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $m_price_max = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $m_price_min = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $m_price_total = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $m_price_total_early = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $sid_reason = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $text_age_restrict = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $url_book = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    public function __construct(array $data)
    {
        $this->a_age_restriction = isset($data['a_age_restriction']) ? array_map(static fn ($item) => new EventListGetResponseEventListAgeRestriction((array)$item), (array)$data['a_age_restriction']) : null;
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
