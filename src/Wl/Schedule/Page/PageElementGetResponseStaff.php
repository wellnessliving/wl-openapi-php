<?php

namespace WlSdk\Wl\Schedule\Page;

class PageElementGetResponseStaff
{
    /**
     * The staff member key.
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

    public function __construct(array $data)
    {
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->s_family = isset($data['s_family']) ? (string)$data['s_family'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
    }
}
