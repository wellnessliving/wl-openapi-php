<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

class PaymentMultipleGetRequest
{
    /**
     * List of appointment keys for which to load unpaid data.
     *
     * When specified, appointments are looked up directly by these keys, instead of by all unpaid
     *  appointments booked for {@link \WlSdk\Wl\Profile\Attendance\Schedule\PaymentMultiple} on the day specified
     * in
     *  {@link \WlSdk\Wl\Profile\Attendance\Schedule\PaymentMultiple}.
     *
     * @var string[]|null
     */
    public ?array $a_appointment = null;

    /**
     * Local date and time for which visit is booked in MySQL format.
     *
     * Can be `null` in case when {@link \WlSdk\Wl\Profile\Attendance\Schedule\PaymentMultiple} passed.
     *
     * @var string|null
     */
    public ?string $dtl_date = null;

    /**
     * When set to `true` it's mean that need load full information about unpaid visits:
     *  * List of available/existing POs.
     *  * List of unpaid addons.
     *  When set to `false` loaded only general information about visits on passed day.
     *
     * @var bool|null
     */
    public ?bool $is_simple = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key.
     *
     * Can be `null` in case when {@link \WlSdk\Wl\Profile\Attendance\Schedule\PaymentMultiple} passed.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Last booked visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The user's key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_appointment' => $this->a_appointment,
            'dtl_date' => $this->dtl_date,
            'is_simple' => $this->is_simple,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_visit' => $this->k_visit,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
