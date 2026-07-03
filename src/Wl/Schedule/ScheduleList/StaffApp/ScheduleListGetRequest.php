<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp;

class ScheduleListGetRequest
{
    /**
     * Configuration options for schedule.
     * Key is option name, value is boolean.
     *
     * May contain the following keys:
     *
     * @var array|null
     */
    public ?array $a_config = null;

    /**
     * The end date of the range from which the list of schedule sessions should be retrieved.
     *
     * This will be `null` if the range has no end date. If this value is used,
     * {@link \WlSdk\Wl\Schedule\ScheduleList\StaffApp\ScheduleList} should not be set.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * The start date of the range from which the list of scheduled sessions should be retrieved.
     *
     * This will be `null` if the range has no start date. If this value is used,
     * {@link \WlSdk\Wl\Schedule\ScheduleList\StaffApp\ScheduleList} should not be set.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * The date of the sessions in Coordinated Universal Time (UTC) and MySQL format.
     *
     * If this value is used, then
     * {@link \WlSdk\Wl\Schedule\ScheduleList\StaffApp\ScheduleList} and
     * {@link \WlSdk\Wl\Schedule\ScheduleList\StaffApp\ScheduleList} should not be set.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_config' => $this->a_config,
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
