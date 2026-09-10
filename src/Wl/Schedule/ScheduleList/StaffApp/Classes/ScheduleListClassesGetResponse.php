<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Classes;

/**
 * Response from GET
 */
class ScheduleListClassesGetResponse
{
    /**
     * List of classes/events.
     * Keys - class/event IDs.
     * Values - class/event titles.
     *
     * @var string[]|null
     */
    public ?array $a_class = null;

    public function __construct(array $data)
    {
        $this->a_class = isset($data['a_class']) ? (array)$data['a_class'] : null;
    }
}
