<?php
namespace WlSdk\Wl\Staff\StaffList;

use WlSdk\WlSdkClient;

/**
 * Returns the list of staff members for the given business.
 */
class StaffListApi
{
    /**
     * A list of privileges to filter staff members by.
     * 
     * This property acts as a filter.
     * Only staff members possessing all the privileges specified in this list will be included in the result.
     * Each element in the array represents a privilege ID, and should be one of
     * [PrivilegeSid](#/components/schemas/Wl.Privilege.PrivilegeSid) constants.
     *
     * @var int[]|null
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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of staff members for the given business.
     *
     * Returns all active (or optionally inactive) staff members for the business, including
     * their name, role, assigned services, contact details, and location assignments. Can be
     * filtered to only staff who have a specific privilege, and whether access-level checks
     * should be applied when building the result.
     *
     * @return StaffListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): StaffListApiGetResponse
    {
        return new StaffListApiGetResponse($this->client->request('/Wl/Staff/StaffList/StaffList.json', $this->params(), 'GET'));
    }

    private function params(): array
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
