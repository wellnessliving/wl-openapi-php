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

    public function __construct(array $data)
    {
        $this->a_enrollment = isset($data['a_enrollment']) ? array_map(static fn ($item) => new TuitionEnrollmentListGetResponseEnrollment((array)$item), (array)$data['a_enrollment']) : null;
    }
}
