<?php

namespace WlSdk\Wl\Staff\StaffList;

/**
 * Response from GET
 */
class StaffListGetResponse
{
    /**
     * No description.
     *
     * @var StaffListGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn ($item) => new StaffListGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
    }
}
