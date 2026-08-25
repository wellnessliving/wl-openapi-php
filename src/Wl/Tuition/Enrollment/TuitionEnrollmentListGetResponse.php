<?php

namespace WlSdk\Wl\Tuition\Enrollment;

/**
 * Response from GET
 */
class TuitionEnrollmentListGetResponse
{
    /**
     * List of tuition enrollments.
     *
     * @var TuitionEnrollmentListGetResponseEnrollment[]|null
     */
    public ?array $a_enrollment = null;

    /**
     * List of users who has paid or are scheduled to pay tuition fee.
     *
     * Keys are user ids. Values are payment information.
     *
     * @var TuitionEnrollmentListGetResponseEnrollmentFee|null
     */
    public ?TuitionEnrollmentListGetResponseEnrollmentFee $a_enrollment_fee = null;

    public function __construct(array $data)
    {
        $this->a_enrollment = isset($data['a_enrollment']) ? array_map(static fn ($item) => new TuitionEnrollmentListGetResponseEnrollment((array)$item), (array)$data['a_enrollment']) : null;
        $this->a_enrollment_fee = isset($data['a_enrollment_fee']) ? new TuitionEnrollmentListGetResponseEnrollmentFee((array)$data['a_enrollment_fee']) : null;
    }
}
