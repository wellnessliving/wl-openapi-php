<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Staff;

/**
 * Response from GET
 */
class ScheduleListStaffGetResponse
{
    /**
     * IDs of staff members which must be represented of business schedule. Primary keys in RsStaffSql table.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
    }
}
