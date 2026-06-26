<?php

namespace WlSdk\Wl\Insurance\Enrollment;

class EnrollmentPanelGetRequest
{
    /**
     * The key of the business in which the enrollment is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Purchased program key.
     * Primary key from RsLoginPromotionSql table.
     *
     * If set, the program key (`k_wellness_program`) will be taken from the LoginPromotionInsuranceSql table.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

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
            'k_login_promotion' => $this->k_login_promotion,
            'k_wellness_program' => $this->k_wellness_program,
            ],
            static fn ($v) => $v !== null
        );
    }
}
