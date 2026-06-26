<?php

namespace WlSdk\Wl\Tuition\Enrollment;

class TuitionEnrollmentListGetResponseEnrollment
{
    /**
     * No description.
     *
     * @var TuitionEnrollmentListGetResponseEnrollmentEvents[]|null
     */
    public ?array $a_events = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $dtl_enrollment = null;

    /**
     * No description.
     *
     * @var int|null
     */
    public ?int $i_payments_left = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $m_payment = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $m_rest = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $m_total = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $uid_payer = null;

    public function __construct(array $data)
    {
        $this->a_events = isset($data['a_events']) ? array_map(static fn ($item) => new TuitionEnrollmentListGetResponseEnrollmentEvents((array)$item), (array)$data['a_events']) : null;
        $this->dtl_enrollment = isset($data['dtl_enrollment']) ? (string)$data['dtl_enrollment'] : null;
        $this->i_payments_left = isset($data['i_payments_left']) ? (int)$data['i_payments_left'] : null;
        $this->m_payment = isset($data['m_payment']) ? (string)$data['m_payment'] : null;
        $this->m_rest = isset($data['m_rest']) ? (string)$data['m_rest'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
        $this->uid_payer = isset($data['uid_payer']) ? (string)$data['uid_payer'] : null;
    }
}
