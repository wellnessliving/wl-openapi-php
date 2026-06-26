<?php

namespace WlSdk\Wl\Schedule\Config\Availability;

class AvailabilityScheduleGetRequest
{
    /**
     * Date to get schedule to.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Date to get schedule from.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * ID of business for which list of staff members must be checked. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
