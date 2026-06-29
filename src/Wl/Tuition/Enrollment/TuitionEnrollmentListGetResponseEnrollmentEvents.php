<?php

namespace WlSdk\Wl\Tuition\Enrollment;

class TuitionEnrollmentListGetResponseEnrollmentEvents
{
    /**
     * Whether this enrollment is cancelled or not.
     *
     * @var bool|null
     */
    public ?bool $is_cancelled = null;

    /**
     * Event ID.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Login type and shopping cart discounts.
     *
     * @var string|null
     */
    public ?string $m_event_discount = null;

    /**
     * Price of the event before login type and shopping cart discounts.
     *
     * @var string|null
     */
    public ?string $m_event_subtotal = null;

    /**
     * Taxes amount.
     *
     * @var string|null
     */
    public ?string $m_event_tax = null;

    /**
     * Enrolled client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->is_cancelled = isset($data['is_cancelled']) ? (bool)$data['is_cancelled'] : null;
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->m_event_discount = isset($data['m_event_discount']) ? (string)$data['m_event_discount'] : null;
        $this->m_event_subtotal = isset($data['m_event_subtotal']) ? (string)$data['m_event_subtotal'] : null;
        $this->m_event_tax = isset($data['m_event_tax']) ? (string)$data['m_event_tax'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
