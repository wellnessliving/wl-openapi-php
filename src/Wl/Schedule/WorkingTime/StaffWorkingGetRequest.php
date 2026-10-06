<?php

namespace WlSdk\Wl\Schedule\WorkingTime;

class StaffWorkingGetRequest
{
    /**
     * End date of the staff working.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Start date of the staff working.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Service key.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Staff Key to show what days are available for appointment booking.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Staff UID to show what days are available for appointment booking.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'k_staff' => $this->k_staff,
            'uid_staff' => $this->uid_staff,
            ],
            static fn ($v) => $v !== null
        );
    }
}
