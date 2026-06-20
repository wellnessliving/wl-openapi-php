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
     * There are 3 scenarios where a user can be given access.
     * Scenario 1 - If a valid member ID used, for instance from a bar code scanner, then the user may have access.
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
