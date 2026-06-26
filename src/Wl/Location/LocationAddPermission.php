<?php

namespace WlSdk\Wl\Location;

use WlSdk\WlSdkClient;

/**
 * Checks if the user has the privilege to add locations.
 */
class LocationAddPermission
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if the user has the privilege to add locations.
     *
     * @return LocationAddPermissionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LocationAddPermissionGetRequest $request): LocationAddPermissionGetResponse
    {
        return new LocationAddPermissionGetResponse($this->client->request('/Wl/Location/LocationAddPermission.json', $request->params(), 'GET'));
    }
}
