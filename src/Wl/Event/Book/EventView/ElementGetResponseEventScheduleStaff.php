<?php
namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseEventScheduleStaff
{
    /**
     * @deprecated Legacy staff key. Returned only for applications from allow-list.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * The staff member name.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * The first letter of staff member's surname.
     *
     * @var string|null
     */
    public ?string $s_surname = null;

    /**
     * The user key of the staff member.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->s_surname = isset($data['s_surname']) ? (string)$data['s_surname'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
