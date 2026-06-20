<?php

namespace WlSdk\Wl\Staff\Privilege;

use WlSdk\WlSdkClient;

/**
 * Returns the list of privileges for the current user in the given business.
 */
class PrivilegeList
{
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
     * @return PrivilegeListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PrivilegeListGetRequest $request): PrivilegeListGetResponse
    {
        return new PrivilegeListGetResponse($this->client->request('/Wl/Staff/Privilege/PrivilegeList.json', $request->params(), 'GET'));
    }
}
