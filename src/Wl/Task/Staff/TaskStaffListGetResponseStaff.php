<?php

namespace WlSdk\Wl\Task\Staff;

class TaskStaffListGetResponseStaff
{
    /**
     * The system role of the role of the staff member in the current business. One of
     * {@link \WlSdk\RsPrivilegeRoleSid} constants. `null` if the staff member has no role in the current business,
     * or
     * the role is not based on a system role.
     *
     * @var int|null
     * @see \WlSdk\RsPrivilegeRoleSid
     */
    public ?int $id_privilege_role = null;

    /**
     * `true` if the staff member is active, `false` otherwise. The activity is the one in the current business;
     * for a staff member who does not work in the current business, the one in the first business of the
     * franchise where the staff member works.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * `true` if the current user may assign a new task to the staff member, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_assignable = null;

    /**
     * Key of the role of the business of the staff member in the current business. `null` if the staff member
     * has no role in the current business, or the role is a system role that the business has not changed.
     *
     * @var string|null
     */
    public ?string $k_business_role = null;

    /**
     * Full name of the staff member.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Key of the user of the staff member.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * URL of the photo of the staff member, for example `https://example.com/staff.jpg`. An empty string if the
     * staff member has no photo.
     *
     * @var string|null
     */
    public ?string $url_image = null;

    public function __construct(array $data)
    {
        $this->id_privilege_role = isset($data['id_privilege_role']) ? (int)$data['id_privilege_role'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_assignable = isset($data['is_assignable']) ? (bool)$data['is_assignable'] : null;
        $this->k_business_role = isset($data['k_business_role']) ? (string)$data['k_business_role'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->url_image = isset($data['url_image']) ? (string)$data['url_image'] : null;
    }
}
