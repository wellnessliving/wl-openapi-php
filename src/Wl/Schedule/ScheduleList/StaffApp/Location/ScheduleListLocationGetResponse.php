<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Location;

/**
 * Response from GET
 */
class ScheduleListLocationGetResponse
{
    /**
     * Location IDs. Primary keys in RsLocationSql table.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
    }
}
