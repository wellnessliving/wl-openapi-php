<?php

namespace WlSdk\Wl\Task\Staff;

/**
 * Response from GET
 */
class TaskStaffListGetResponse
{
    /**
     * The staff roles of the business, in the order of the setup of the business.
     *
     * A role that is removed is not listed. A role without staff members is listed.
     *
     * Each element has the following structure:
     *
     * @var TaskStaffListGetResponseRole[]|null
     */
    public ?array $a_role = null;

    /**
     * The staff members whose accounts are not removed, sorted by name.
     *
     * Each element has the following structure:
     *
     * @var TaskStaffListGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_role = isset($data['a_role']) ? array_map(static fn ($item) => new TaskStaffListGetResponseRole((array)$item), (array)$data['a_role']) : null;
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn ($item) => new TaskStaffListGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
    }
}
