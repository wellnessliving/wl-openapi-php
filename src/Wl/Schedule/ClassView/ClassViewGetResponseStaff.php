<?php
namespace WlSdk\Wl\Schedule\ClassView;

class ClassViewGetResponseStaff
{
    /**
     * Information about staff photo:
     *
     * @var ClassViewGetResponseStaffLogo|null
     */
    public ?ClassViewGetResponseStaffLogo $a_logo = null;

    /**
     * Whether staff or pay rate changed due quick substitution.
     *
     * @var bool|null
     */
    public ?bool $is_quick_substitute = null;

    /**
     * Whether or not this staff member is a substitute.
     *
     * @var bool|null
     */
    public ?bool $is_substitute = null;

    /**
     * Deprecated use `uid_staff` instead.
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

    /**
     * 1st letter of surname of staff member.
     *
     * @var string|null
     */
    public ?string $s_family = null;

    /**
     * Staff name.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    public function __construct(array $data)
    {
        $this->a_logo = isset($data['a_logo']) ? new ClassViewGetResponseStaffLogo((array)$data['a_logo']) : null;
        $this->is_quick_substitute = isset($data['is_quick_substitute']) ? (bool)$data['is_quick_substitute'] : null;
        $this->is_substitute = isset($data['is_substitute']) ? (bool)$data['is_substitute'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->s_family = isset($data['s_family']) ? (string)$data['s_family'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
    }
}
