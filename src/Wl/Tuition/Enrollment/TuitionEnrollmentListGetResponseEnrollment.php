<?php

namespace WlSdk\Wl\Tuition\Enrollment;

class TuitionEnrollmentListGetResponseEnrollment
{
    /**
     * Events for this enrollment.
     *
     * @var TuitionEnrollmentListGetResponseEnrollmentEvents[]|null
     */
    public ?array $a_events = null;

    /**
     * Next payment date in local business timezone and MySQL format.
     *
     * @var string|null
     */
    public ?string $dl_next = null;

    /**
     * Date and time of the enrollment in local business timezone.
     *
     * @var string|null
     */
    public ?string $dtl_enrollment = null;

    /**
     * Number of payments left.
     *
     * @var int|null
     */
    public ?int $i_payments_left = null;

    /**
     * Installment plan status.
     *
     * @var int|null
     */
    public ?int $id_installment_status = null;

    /**
     * Key of the tuition purchase item. This is enrollment key, which can be used to modify and cancel the
     * enrollment.
     *
     * @var string|null
     */
    public ?string $k_purchase_item_tuition = null;

    /**
     * One payment amount.
     *
     * @var string|null
     */
    public ?string $m_payment = null;

    /**
     * Rest amount to be paid.
     *
     * @var string|null
     */
    public ?string $m_rest = null;

    /**
     * Total initial amount to be paid.
     *
     * @var string|null
     */
    public ?string $m_total = null;

    /**
     * Payer for this enrollment.
     *
     * This user can be enrolled or not, but he pays for the entire enrollment.
     *
     * @var string|null
     */
    public ?string $uid_payer = null;

    public function __construct(array $data)
    {
        $this->a_events = isset($data['a_events']) ? array_map(static fn ($item) => new TuitionEnrollmentListGetResponseEnrollmentEvents((array)$item), (array)$data['a_events']) : null;
        $this->dl_next = isset($data['dl_next']) ? (string)$data['dl_next'] : null;
        $this->dtl_enrollment = isset($data['dtl_enrollment']) ? (string)$data['dtl_enrollment'] : null;
        $this->i_payments_left = isset($data['i_payments_left']) ? (int)$data['i_payments_left'] : null;
        $this->id_installment_status = isset($data['id_installment_status']) ? (int)$data['id_installment_status'] : null;
        $this->k_purchase_item_tuition = isset($data['k_purchase_item_tuition']) ? (string)$data['k_purchase_item_tuition'] : null;
        $this->m_payment = isset($data['m_payment']) ? (string)$data['m_payment'] : null;
        $this->m_rest = isset($data['m_rest']) ? (string)$data['m_rest'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
        $this->uid_payer = isset($data['uid_payer']) ? (string)$data['uid_payer'] : null;
    }
}
