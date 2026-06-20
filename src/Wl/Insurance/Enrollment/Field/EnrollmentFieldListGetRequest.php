<?php

namespace WlSdk\Wl\Insurance\Enrollment\Field;

class EnrollmentFieldListGetRequest
{
    /**
     * The key of the business in which the enrollment is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * "Wellness Program" key.
     *
     * @var string|null
     */
    public ?string $k_wellness_program = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_wellness_program' => $this->k_wellness_program,
            ],
            static fn ($v) => $v !== null
        );
    }
}
