<?php

namespace WlSdk\Wl\Gym\Visit;

class VisitAddPostRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the user making the gym visit.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_time = null;

    /**
     * The date of visit, without a time component in MySQL format. Date is based on the timezone of the location.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Determines whether payment is required for the visit.
     *
     * `true` if payment is needed for the visit.
     * `false` if visit should be not pay.
     *
     * @var bool|null
     */
    public ?bool $is_pay = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            'a_time' => $this->a_time,
            'dt_date' => $this->dt_date,
            'is_pay' => $this->is_pay,
            ],
            static fn ($v) => $v !== null
        );
    }
}
