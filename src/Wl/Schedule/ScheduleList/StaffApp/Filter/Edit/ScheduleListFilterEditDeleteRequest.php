<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Filter\Edit;

class ScheduleListFilterEditDeleteRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of saved filter. Primary key in RsScheduleConfigSql table.
     * `0` to create new filter.
     *
     * @var string|null
     */
    public ?string $k_schedule_config = null;

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
            'k_business' => $this->k_business,
            'k_schedule_config' => $this->k_schedule_config,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
