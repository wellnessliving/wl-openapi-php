<?php

namespace WlSdk\Wl\Location\Staff;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * A list of staff members with information about them. Every element has keys:
     *
     *
     * Deprecated: `k_staff` can be additionally returned for a limited list of third-party apps.
     *
     * @var ListGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn ($item) => new ListGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
    }
}
