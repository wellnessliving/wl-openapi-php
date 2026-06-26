<?php

namespace WlSdk\Wl\Reception\Roster;

class ScheduleListGetRequest
{
    /**
     * Local date of the currently viewed schedule list.
     * In MySQL format, without time.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * ID of business location to show information for. Primary key from RsLocationSql.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date_local' => $this->dt_date_local,
            'k_location' => $this->k_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
