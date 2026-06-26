<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Filter;

/**
 * Response from GET
 */
class ScheduleListFilterGetResponse
{
    /**
     * List of schedule filters. Keys - filters IDs; primary key in RsScheduleConfigSql table. Values - sub arrays
     * with next keys:
     *
     * @var ScheduleListFilterGetResponseFilter|null
     */
    public ?ScheduleListFilterGetResponseFilter $a_filter = null;

    public function __construct(array $data)
    {
        $this->a_filter = isset($data['a_filter']) ? new ScheduleListFilterGetResponseFilter((array)$data['a_filter']) : null;
    }
}
