<?php

namespace WlSdk\Wl\Schedule\ScheduleList;

/**
 * Response from GET
 */
class ScheduleListGetResponse
{
    /**
     * Schedule of sessions in location `k_location` in day `dt_date`. Every element has keys:
     *
     * @var ScheduleListGetResponseSchedule[]|null
     */
    public ?array $a_schedule = null;

    /**
     * Is there any classes available for booking.
     *
     * @var bool|null
     */
    public ?bool $is_classes_available = null;

    public function __construct(array $data)
    {
        $this->a_schedule = isset($data['a_schedule']) ? array_map(static fn ($item) => new ScheduleListGetResponseSchedule((array)$item), (array)$data['a_schedule']) : null;
        $this->is_classes_available = isset($data['is_classes_available']) ? (bool)$data['is_classes_available'] : null;
    }
}
