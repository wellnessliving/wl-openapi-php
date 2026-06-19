<?php
namespace WlSdk\Wl\Staff\Privilege;

use WlSdk\WlSdkClient;

/**
 * Returns the list of privileges for the current user in the given business.
 */
class PrivilegeListApi
{
    /**
     * Key of business to get privileges for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key to get privileges for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of privileges for the current user in the given business.
     *
     * Returns the complete access profile of the signed-in user for the given business: staff
     * privileges by ID, named admin privileges, and a flag indicating super-admin status. Can
     * only be called for the currently authenticated user, not on behalf of another user.
     *
     * @return PrivilegeListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): PrivilegeListApiGetResponse
    {
        return new PrivilegeListApiGetResponse($this->client->request('/Wl/Staff/Privilege/PrivilegeList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
