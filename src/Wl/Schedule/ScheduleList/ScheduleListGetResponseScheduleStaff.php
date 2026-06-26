<?php

namespace WlSdk\Wl\Schedule\ScheduleList;

class ScheduleListGetResponseScheduleStaff
{
    /**
     * Whether staff or pay rate changed due quick substitution.
     *
     * @var bool|null
     */
    public ?bool $is_quick_substitute = null;

    /**
     * Determines current staff member as substituted.
     *
     * @var bool|null
     */
    public ?bool $is_substitute = null;

    /**
     * Full name of staff.
     *
     * @var string|null
     */
    public ?string $s_staff = null;

    public function __construct(array $data)
    {
        $this->is_quick_substitute = isset($data['is_quick_substitute']) ? (bool)$data['is_quick_substitute'] : null;
        $this->is_substitute = isset($data['is_substitute']) ? (bool)$data['is_substitute'] : null;
        $this->s_staff = isset($data['s_staff']) ? (string)$data['s_staff'] : null;
    }
}
