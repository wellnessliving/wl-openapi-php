<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Staff;

/**
 * Response from GET
 */
class ScheduleListStaffGetResponse
{
    /**
     * IDs of staff members which must be represented of business schedule. Primary keys in the `rs_staff` table.
     *
     * Returned only for applications in the `APPS_USE_OLD_K_STAFF` allow-list.
     *
     * @var string[]|null
     */
    public ?array $a_staff = null;

    /**
     * IDs of staff members which must be represented of business schedule. Primary keys in the `passport_login`
     * table.
     *
     * @var string[]|null
     */
    public ?array $a_uid_staff = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? (array)$data['a_staff'] : null;
        $this->a_uid_staff = isset($data['a_uid_staff']) ? (array)$data['a_uid_staff'] : null;
    }
}
