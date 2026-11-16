<?php

namespace WlSdk\Wl\Integration\DragonFly;

use WlSdk\WlSdkClient;

/**
 * Checks if the user can physically access the location.
 */
class Access
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if the user can physically access the location.
     *
     * A member ID, for instance from a bar code scanner, is resolved to the user key of the client.
     * If there is no such member in the business, the access is denied.
     * Then the user key is checked in the same way regardless of how it was specified.
     *
     * There are 2 scenarios where a user can be given access.
     * Scenario 2 - If a valid uid is used and the user is a staff member, then the user may have access.
     * Scenario 3 - If a valid uid is used and the client has a session or gym access at this location, then the
     * user may have access.
     *
     * @return AccessGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AccessGetRequest $request): AccessGetResponse
    {
        return new AccessGetResponse($this->client->request('/Wl/Integration/DragonFly/Access.json', $request->params(), 'GET'));
    }
}
