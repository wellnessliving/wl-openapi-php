<?php

namespace WlSdk\Wl\Staff\Role;

use WlSdk\WlSdkClient;

/**
 * Gets list of staff roles.
 */
class StaffRole
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of staff roles.
     *
     * @return StaffRoleGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StaffRoleGetRequest $request): StaffRoleGetResponse
    {
        return new StaffRoleGetResponse($this->client->request('/Wl/Staff/Role/StaffRole.json', $request->params(), 'GET'));
    }
}
