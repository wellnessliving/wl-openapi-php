<?php

namespace WlSdk\Wl\Tuition\Enrollment;

class TuitionEnrollmentListGetResponseEnrollmentEvents
{
    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_cancelled = null;

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
    public ?string $m_event_discount = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $m_event_subtotal = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $m_event_tax = null;

    /**
     * No description.
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
