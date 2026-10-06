<?php

namespace WlSdk\Wl\Schedule\Page;

class PageElementGetResponseStaff
{
    /**
     * The staff user key.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * Deprecated staff key. Returned only to applications in `APPS_USE_OLD_K_STAFF`.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * The surname of the staff member.
     *
     * @var string|null
     */
    public ?string $s_family = null;

    /**
     * The first name of the staff member.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * The full name of the staff member.
     *
     * @var string|null
     */
    public ?string $s_name_full = null;

    public function __construct(array $data)
    {
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->s_family = isset($data['s_family']) ? (string)$data['s_family'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->s_name_full = isset($data['s_name_full']) ? (string)$data['s_name_full'] : null;
    }
}
