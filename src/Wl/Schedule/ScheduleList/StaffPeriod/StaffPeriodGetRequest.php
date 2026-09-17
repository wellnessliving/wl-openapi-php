<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffPeriod;

class StaffPeriodGetRequest
{
    /**
     * Date for which working hours are required.
     * In business timezone.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Key of business for which working hours are required.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
