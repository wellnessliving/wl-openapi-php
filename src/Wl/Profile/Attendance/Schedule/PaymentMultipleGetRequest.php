<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule;

class PaymentMultipleGetRequest
{
    /**
     * Local date and time for which visit is booked in MySQL format.
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
