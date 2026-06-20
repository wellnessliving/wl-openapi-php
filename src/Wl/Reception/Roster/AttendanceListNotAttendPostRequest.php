<?php

namespace WlSdk\Wl\Reception\Roster;

class AttendanceListNotAttendPostRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * The secret for authenticating the attendance kiosk.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            's_secret' => $this->s_secret,
            ],
            static fn ($v) => $v !== null
        );
    }
}
