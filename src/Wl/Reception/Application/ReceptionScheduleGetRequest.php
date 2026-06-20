<?php

namespace WlSdk\Wl\Reception\Application;

class ReceptionScheduleGetRequest
{
    /**
     * The business key, where the Self Check-In Web App is started.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key, where the Self Check-In Web App is started.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the Self Check-In Web App.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * The key of the user to show the schedule for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            's_secret' => $this->s_secret,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
