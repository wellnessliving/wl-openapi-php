<?php
namespace WlSdk\Wl\Business;

use WlSdk\WlSdkClient;

/**
 * Gets information about businesses where given user is a staff member.
 */
class BusinessAccessGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about businesses where given user is a staff member.
     *
     * Used during staff login to determine which businesses the user can access. Accepts identity via UID
     * or any supported social login identifier, then returns the matching list of businesses to display
     * on the business selection screen. In backend mode, franchisee locations and IP access restrictions
     * are also evaluated.
     *
     * @return BusinessAccessGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessAccessGetRequest $request): BusinessAccessGetResponse
    {
        return new BusinessAccessGetResponse($this->client->request('/Wl/Business/BusinessAccess.json', $request->params(), 'GET'));
    }
}
