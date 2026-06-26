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
     * ID of business for which working hours are required.
     * Primary key in table RsBusinessSql.
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
