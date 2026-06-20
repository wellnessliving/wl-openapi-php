<?php
namespace WlSdk\Wl\Staff\Privilege;

/**
 * Response from GET
 */
class PrivilegeListGetResponse
{
    /**
     * List of privileges, if user is administrator.
     * 
     * There is no certain list of admin privileges, as they are name-based.
     * If you need to check access to certain place contact WellnessLiving integration team.
     *
     * @var string[]|null
     */
    public ?array $a_privilege_passport = null;

    /**
     * List of privileges, if the given user is a staff member in the give business.
     *
     * @var \WlSdk\Wl\Privilege\PrivilegeSid[]|null
     */
    public ?array $a_privilege_staff = null;

    /**
     * Whether this user is a super-administrator because he is a studio staff member.
     * 
     * `true`, if this user is a super administrator because he is a studio staff member.
     * Super administrators have all privileges.
     * 
     * `false` if this is an ordinary user.
     *
     * @var bool|null
     */
    public ?bool $is_admin = null;

    public function __construct(array $data)
    {
        $this->a_privilege_passport = isset($data['a_privilege_passport']) ? (array)$data['a_privilege_passport'] : null;
        $this->a_privilege_staff = isset($data['a_privilege_staff']) ? array_map(static fn($v) => \WlSdk\Wl\Privilege\PrivilegeSid::tryFrom((int)$v), (array)$data['a_privilege_staff']) : null;
        $this->is_admin = isset($data['is_admin']) ? (bool)$data['is_admin'] : null;
    }
}
