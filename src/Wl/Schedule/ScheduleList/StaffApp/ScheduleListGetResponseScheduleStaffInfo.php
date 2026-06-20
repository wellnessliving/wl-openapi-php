<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp;

class ScheduleListGetResponseScheduleStaffInfo
{
    /**
     * Staff full name.
     *
     * @var string|null
     */
    public ?string $text_staff = null;

    /**
     * `true` means staff is substituted, `false` simple staff member.
     *
     * @var bool|null
     */
    public ?bool $is_staff_change = null;

    /**
     * Staff key.
     * Returned only for applications in the `APPS_USE_OLD_K_STAFF` allow-list.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * Staff user key.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->text_staff = isset($data['text_staff']) ? (string)$data['text_staff'] : null;
        $this->is_staff_change = isset($data['is_staff_change']) ? (bool)$data['is_staff_change'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
