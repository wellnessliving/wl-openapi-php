<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Resource;

/**
 * Response from GET
 */
class ScheduleListResourceGetResponse
{
    /**
     * List of assets. Keys - asset IDs; primary key in RsResourceSql table. Values - sub array with next keys:
     *
     * @var ScheduleListResourceGetResponseResource|null
     */
    public ?ScheduleListResourceGetResponseResource $a_resource = null;

    public function __construct(array $data)
    {
        $this->a_resource = isset($data['a_resource']) ? new ScheduleListResourceGetResponseResource((array)$data['a_resource']) : null;
    }
}
