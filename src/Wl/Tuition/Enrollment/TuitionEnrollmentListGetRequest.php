<?php

namespace WlSdk\Wl\Tuition\Enrollment;

class TuitionEnrollmentListGetRequest
{
    /**
     * Filters.
     *
     * List includes enrollments to the tuition. And enrollments to the tuition include enrollment to the event.
     * If any part of the enrollment to the tuition is valid, according to the given filter, full enrollment is
     * included.
     *
     * For example.
     * Client A is payer for two tuition enrollments. One is for client B and events E1, E2. Another for clients C
     * and D.
     * Both for E1. And Client W pays for one tuition enrollment - for client X.
     *
     * If we filter list by enrolled client D, for example. List will return two tuition enrollments. Both paid
     * with Client A.
     * Because we think that these enrollments are combined in single family and should both be returned.
     *
     * All filters are optional. And added as AND. If you send certain events and certain statues, both conditions
     * should be met.
     *
     * @var array|null
     */
    public ?array $a_filter = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the tuition in tuition microservice.
     *
     * @var string|null
     */
    public ?string $s_tuition_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_filter' => $this->a_filter,
            'k_business' => $this->k_business,
            's_tuition_id' => $this->s_tuition_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
