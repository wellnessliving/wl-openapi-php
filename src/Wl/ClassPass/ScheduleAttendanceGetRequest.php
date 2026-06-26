<?php

namespace WlSdk\Wl\ClassPass;

class ScheduleAttendanceGetRequest
{
    /**
     * Partner ID.
     *
     * @var string|null
     */
    public ?string $s_partner = null;

    /**
     * Schedule ID.
     *
     * @var string|null
     */
    public ?string $s_schedule = null;

    /**
     * Venue ID.
     *
     * @var string|null
     */
    public ?string $s_venue = null;

    public function params(): array
    {
        return array_filter(
            [
            's_partner' => $this->s_partner,
            's_schedule' => $this->s_schedule,
            's_venue' => $this->s_venue,
            ],
            static fn ($v) => $v !== null
        );
    }
}
