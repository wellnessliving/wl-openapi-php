<?php

namespace WlSdk\Wl\Classes\Period\Staff;

class SubstitutePostResponseStaff
{
    /**
     * Key of the pay rate of the instructor for the session. `null` if the session uses no pay rate of its own.
     * The
     * request may also send an empty string or leave this key out, which both mean `null`; the result always has
     * this key.
     *
     * @var string|null
     */
    public ?string $k_staff_pay = null;

    /**
     * Key of the user of the instructor.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->k_staff_pay = isset($data['k_staff_pay']) ? (string)$data['k_staff_pay'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
