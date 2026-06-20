<?php

namespace WlSdk\Wl\Reception\Application;

class ReceptionScheduleGetResponseClassStaffAll
{
    /**
     * The staff member's full name.
     *
     * @var string|null
     */
    public ?string $s_name_full = null;

    public function __construct(array $data)
    {
        $this->s_name_full = isset($data['s_name_full']) ? (string)$data['s_name_full'] : null;
    }
}
