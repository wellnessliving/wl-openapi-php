<?php

namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseEvent
{
    /**
     * List of sessions available for booking.
     * See `a_book_available`.
     *
     * @var ElementGetResponseEventBookAvailable|null
     */
    public ?ElementGetResponseEventBookAvailable $a_book_available = null;

    /**
     * Image of event. See `a_class_logo`.
     *
     * @var ElementGetResponseEventClassLogo|null
     */
    public ?ElementGetResponseEventClassLogo $a_class_logo = null;

    /**
     * Class tab keys. See `a_class_tab`.
     *
     * @var string[]|null
     */
    public ?array $a_class_tab = null;

    /**
     * List of installment plans. See `a_installment_template`.
     *
     * @var ElementGetResponseEventInstallmentTemplate|null
     */
    public ?ElementGetResponseEventInstallmentTemplate $a_installment_template = null;

    /**
     * Schedule of event sessions. See `a_schedule`.
     *
     * @var ElementGetResponseEventSchedule|null
     */
    public ?ElementGetResponseEventSchedule $a_schedule = null;

    /**
     * IDs of online store category.
     *
     * @var string[]|null
     */
    public ?array $a_shop_category = null;

    /**
     * Photos of staff. See `a_staff_logo`.
     *
     * @var ElementGetResponseEventStaffLogo|null
     */
    public ?ElementGetResponseEventStaffLogo $a_staff_logo = null;

    /**
     * Date/time of first event session.
     *
     * @var string|null
     */
    public ?string $dt_book_date = null;

    /**
     * Early date of event purchase.
     *
     * @var string|null
     */
    public ?string $dt_early = null;

    /**
     * End date of the event instance.
     *
     * @var string|null
     */
    public ?string $dt_end = null;

    /**
     * Date of first event session.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * Html End date of the event instance.
     *
     * @var string|null
     */
    public ?string $html_end = null;

    /**
     * Html Date of first event session.
     *
     * @var string|null
     */
    public ?string $html_start = null;

    /**
     * Whether event will be hidden in the White Label mobile application.
     *
     * @var bool|null
     */
    public ?bool $hide_application = null;

    /**
     * Special instruction for event.
     *
     * @var string|null
     */
    public ?string $html_special = null;

    /**
     * Session count in event.
     *
     * @var int|null
     */
    public ?int $i_session = null;

    /**
     * Remaining session count in event.
     *
     * @var int|null
     */
    public ?int $i_session_remain = null;

    /**
     * Whether event availability was checked.
     *
     * @var bool|null
     */
    public ?bool $is_availability_checked = null;

    /**
     * Whether event is booked already
     *
     * @var bool|null
     */
    public ?bool $is_book = null;

    /**
     * `true` if there are no free spots in the event and booking is available only into wait list.
     *
     * @var bool|null
     */
    public ?bool $is_full = null;

    /**
     * `true` if the selected session can be a make up session; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_makeup = null;

    /**
     * `true` if the event session has already started or ended and is not available to book.
     *
     * @var bool|null
     */
    public ?bool $is_past = null;

    /**
     * `true` `a_business_policy` contains the custom policies from the event; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_policy_custom = null;

    /**
     * `true` if event is virtual; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_virtual = null;

    /**
     * Key of first event session.
     *
     * @var string|null
     */
    public ?string $k_book_class_period = null;

    /**
     * Price of the event session.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * Price of the full event.
     *
     * @var string|null
     */
    public ?string $m_price_total = null;

    /**
     * Price of the full event, should be used as full price while `dt_early` is actual.
     *
     * @var string|null
     */
    public ?string $m_price_total_early = null;

    /**
     * Reason of booking restriction. For example if exception has been thrown.
     *
     * @var string|null
     */
    public ?string $s_deny_reason = null;

    /**
     * Event title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Description of event. Ready to put into browser.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    public function __construct(array $data)
    {
        $this->a_book_available = isset($data['a_book_available']) ? new ElementGetResponseEventBookAvailable((array)$data['a_book_available']) : null;
        $this->a_class_logo = isset($data['a_class_logo']) ? new ElementGetResponseEventClassLogo((array)$data['a_class_logo']) : null;
        $this->a_class_tab = isset($data['a_class_tab']) ? (array)$data['a_class_tab'] : null;
        $this->a_installment_template = isset($data['a_installment_template']) ? new ElementGetResponseEventInstallmentTemplate((array)$data['a_installment_template']) : null;
        $this->a_schedule = isset($data['a_schedule']) ? new ElementGetResponseEventSchedule((array)$data['a_schedule']) : null;
        $this->a_shop_category = isset($data['a_shop_category']) ? (array)$data['a_shop_category'] : null;
        $this->a_staff_logo = isset($data['a_staff_logo']) ? new ElementGetResponseEventStaffLogo((array)$data['a_staff_logo']) : null;
        $this->dt_book_date = isset($data['dt_book_date']) ? (string)$data['dt_book_date'] : null;
        $this->dt_early = isset($data['dt_early']) ? (string)$data['dt_early'] : null;
        $this->dt_end = isset($data['dt_end']) ? (string)$data['dt_end'] : null;
        $this->dt_start = isset($data['dt_start']) ? (string)$data['dt_start'] : null;
        $this->html_end = isset($data['html_end']) ? (string)$data['html_end'] : null;
        $this->html_start = isset($data['html_start']) ? (string)$data['html_start'] : null;
        $this->hide_application = isset($data['hide_application']) ? (bool)$data['hide_application'] : null;
        $this->html_special = isset($data['html_special']) ? (string)$data['html_special'] : null;
        $this->i_session = isset($data['i_session']) ? (int)$data['i_session'] : null;
        $this->i_session_remain = isset($data['i_session_remain']) ? (int)$data['i_session_remain'] : null;
        $this->is_availability_checked = isset($data['is_availability_checked']) ? (bool)$data['is_availability_checked'] : null;
        $this->is_book = isset($data['is_book']) ? (bool)$data['is_book'] : null;
        $this->is_full = isset($data['is_full']) ? (bool)$data['is_full'] : null;
        $this->is_makeup = isset($data['is_makeup']) ? (bool)$data['is_makeup'] : null;
        $this->is_past = isset($data['is_past']) ? (bool)$data['is_past'] : null;
        $this->is_policy_custom = isset($data['is_policy_custom']) ? (bool)$data['is_policy_custom'] : null;
        $this->is_virtual = isset($data['is_virtual']) ? (bool)$data['is_virtual'] : null;
        $this->k_book_class_period = isset($data['k_book_class_period']) ? (string)$data['k_book_class_period'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->m_price_total = isset($data['m_price_total']) ? (string)$data['m_price_total'] : null;
        $this->m_price_total_early = isset($data['m_price_total_early']) ? (string)$data['m_price_total_early'] : null;
        $this->s_deny_reason = isset($data['s_deny_reason']) ? (string)$data['s_deny_reason'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
    }
}
