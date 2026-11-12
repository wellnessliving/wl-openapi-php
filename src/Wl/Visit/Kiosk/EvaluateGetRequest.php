<?php

namespace WlSdk\Wl\Visit\Kiosk;

class EvaluateGetRequest
{
    /**
     * Local date and time of the check-in at the location, in MySQL format, for example `2026-11-05 09:30:00`.
     *
     * `null` for the current time.
     *
     * @var string|null
     */
    public ?string $dtl_date = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location of the kiosk.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key of the client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtl_date' => $this->dtl_date,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
