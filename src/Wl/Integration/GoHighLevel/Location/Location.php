<?php

namespace WlSdk\Wl\Integration\GoHighLevel\Location;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Integration/GoHighLevel/Location/Location.json
 */
class Location
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Integration/GoHighLevel/Location/Location.json.
     *
     * @return LocationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LocationPostRequest $request): LocationPostResponse
    {
        return new LocationPostResponse($this->client->request('/Wl/Integration/GoHighLevel/Location/Location.json', $request->params(), 'POST'));
    }

    /**
     * Calls DELETE /Wl/Integration/GoHighLevel/Location/Location.json.
     *
     * @return LocationDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LocationDeleteRequest $request): LocationDeleteResponse
    {
        return new LocationDeleteResponse($this->client->request('/Wl/Integration/GoHighLevel/Location/Location.json', $request->params(), 'DELETE'));
    }
}
