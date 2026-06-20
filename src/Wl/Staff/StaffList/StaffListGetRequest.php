<?php
namespace WlSdk\Wl\Staff\StaffList;

class StaffListGetRequest
{
    /**
     * A list of privileges to filter staff members by.
     * 
     * This property acts as a filter.
     * Only staff members possessing all the privileges specified in this list will be included in the result.
     * Each element in the array represents a privilege ID, and should be one of {@link
     * \WlSdk\Wl\Privilege\PrivilegeSid} constants.
     *
     * @var \WlSdk\Wl\Privilege\PrivilegeSid[]|null
     */
    public ?array $a_privilege = null;

    /**
     * Determines that only staff members which the current user has access to should be retrieved.
     * 
     *  `true` if only staff members which the current user has access to should be retrieved.
     *  `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_check_staff_access = null;

    /**
     * Whether inactive and removed staff members are available.
     * If `true` inactive and removed staff members are available. `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_staff_inactive = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_privilege' => $this->a_privilege,
            'is_check_staff_access' => $this->is_check_staff_access,
            'is_staff_inactive' => $this->is_staff_inactive,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
