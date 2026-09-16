<?php

namespace WlSdk\Wl\Login\Promotion;

class PromotionPayPauseGetResponsePaymentPeriods
{
    /**
     * End date of the period in local timezone.
     *
     * @var string|null
     */
    public ?string $dt_end = null;

    /**
     * Date, when this period should be paid.
     *
     * @var string|null
     */
    public ?string $dl_payment = null;

    /**
     * Start date of the period in local timezone.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    public function __construct(array $data)
    {
        $this->dt_end = isset($data['dt_end']) ? (string)$data['dt_end'] : null;
        $this->dl_payment = isset($data['dl_payment']) ? (string)$data['dl_payment'] : null;
        $this->dt_start = isset($data['dt_start']) ? (string)$data['dt_start'] : null;
    }
}
