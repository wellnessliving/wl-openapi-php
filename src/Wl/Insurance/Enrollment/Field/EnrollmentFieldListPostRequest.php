<?php

namespace WlSdk\Wl\Insurance\Enrollment\Field;

class EnrollmentFieldListPostRequest
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

    /**
     * Reimbursement account information.
     *
     * Keys - field name.
     * Values - value entered by user.
     *
     * @var string[]|null
     */
    public ?array $a_account = null;

    /**
     * List of fields that the user has filled in for enrollment.
     *
     * Keys refer specifically to field keys.
     * Values refer specifically to values entered by the user.
     *
     * @var string[]|null
     */
    public ?array $a_field = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_wellness_program' => $this->k_wellness_program,
            'a_account' => $this->a_account,
            'a_field' => $this->a_field,
            ],
            static fn ($v) => $v !== null
        );
    }
}
