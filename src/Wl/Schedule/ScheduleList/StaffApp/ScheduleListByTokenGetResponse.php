<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp;

/**
 * Response from GET
 */
class ScheduleListByTokenGetResponse
{
    /**
     * The sessions present on the business schedule. These are sorted chronologically in ascending order.
     * Every element has the following keys:
     *
     * @var ScheduleListByTokenGetResponseSchedule[]|null
     */
    public ?array $a_schedule = null;

    /**
     * `true` - If the business has at least one virtual service, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_virtual_service = null;

    public function __construct(array $data)
    {
        $this->a_schedule = isset($data['a_schedule']) ? array_map(static fn ($item) => new ScheduleListByTokenGetResponseSchedule((array)$item), (array)$data['a_schedule']) : null;
        $this->is_virtual_service = isset($data['is_virtual_service']) ? (bool)$data['is_virtual_service'] : null;
    }
}
