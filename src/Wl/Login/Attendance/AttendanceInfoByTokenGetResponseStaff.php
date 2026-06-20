<?php
namespace WlSdk\Wl\Login\Attendance;

class AttendanceInfoByTokenGetResponseStaff
{
    /**
     * Data of staff member's photo. Empty if staff has no photo. Otherwise contains next keys:
     *
     * @var AttendanceInfoByTokenGetResponseStaffLogo|null
     */
    public ?AttendanceInfoByTokenGetResponseStaffLogo $a_logo = null;

    /**
     * deprecated Legacy staff key. Returned only for applications from allow-list.
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
     * Staff member's first name.
     *
     * @var string|null
     */
    public ?string $html_firstname = null;

    /**
     * Staff member's last name.
     *
     * @var string|null
     */
    public ?string $html_lastname = null;

    public function __construct(array $data)
    {
        $this->a_logo = isset($data['a_logo']) ? new AttendanceInfoByTokenGetResponseStaffLogo((array)$data['a_logo']) : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->html_firstname = isset($data['html_firstname']) ? (string)$data['html_firstname'] : null;
        $this->html_lastname = isset($data['html_lastname']) ? (string)$data['html_lastname'] : null;
    }
}
