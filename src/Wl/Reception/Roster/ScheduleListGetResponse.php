<?php

namespace WlSdk\Wl\Reception\Roster;

/**
 * Response from GET
 */
class ScheduleListGetResponse
{
    /**
     * Schedule of sessions in location [ScheduleListApi](/Wl/Schedule/ScheduleList/ScheduleList.json) in day
     * [ScheduleListApi](/Wl/Schedule/ScheduleList/ScheduleList.json).
     *
     * @var array[]|null
     */
    public ?array $a_schedule = null;

    public function __construct(array $data)
    {
        $this->a_schedule = isset($data['a_schedule']) ? (array)$data['a_schedule'] : null;
    }
}
