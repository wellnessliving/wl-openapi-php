<?php

namespace WlSdk\Wl\Tuition\Enrollment;

class TuitionEnrollmentListGetRequest
{
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
            'k_business' => $this->k_business,
            's_tuition_id' => $this->s_tuition_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
