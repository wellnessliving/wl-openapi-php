<?php

namespace WlSdk\Wl\Location;

use WlSdk\WlSdkClient;

/**
 * Updates location customer status, count of customers locations and adds log.
 */
class LocationOption
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates location customer status, count of customers locations and adds log.
     *
     * @return LocationOptionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LocationOptionPostRequest $request): LocationOptionPostResponse
    {
        return new LocationOptionPostResponse($this->client->request('/Wl/Location/LocationOption.json', $request->params(), 'POST'));
    }
}
