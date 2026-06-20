<?php
namespace WlSdk\Wl\Book\Process\Info;

class Info54GetResponseStaff
{
    /**
     * The staff member photo:
     *
     * @var Info54GetResponseStaffLogo|null
     */
    public ?Info54GetResponseStaffLogo $a_logo = null;

    /**
     * The first letter of staff member surname.
     *
     * @var string|null
     */
    public ?string $s_family = null;

    /**
     * The staff member's name.
     *
     * @var string|null
     */
    public ?string $s_staff = null;

    /**
     * UID of the staff member.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * Alias of `uid_staff` for backward compatibility.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_logo = isset($data['a_logo']) ? new Info54GetResponseStaffLogo((array)$data['a_logo']) : null;
        $this->s_family = isset($data['s_family']) ? (string)$data['s_family'] : null;
        $this->s_staff = isset($data['s_staff']) ? (string)$data['s_staff'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
