<?php

namespace WlSdk\Wl\Staff\StaffList;

/**
 * Response from GET
 */
class StaffListGetResponse
{
    /**
     * Information about staff members.
     * Each array index is the staff member keys.
     * Each array element is an array containing the following fields:
     *
     * @var StaffListGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn ($item) => new StaffListGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
    }
}
