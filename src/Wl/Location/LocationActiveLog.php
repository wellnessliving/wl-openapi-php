<?php

namespace WlSdk\Wl\Location;

use WlSdk\WlSdkClient;

/**
 * Edits history of location activation change.
 */
class LocationActiveLog
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Edits history of location activation change.
     *
     * @return LocationActiveLogPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LocationActiveLogPostRequest $request): LocationActiveLogPostResponse
    {
        return new LocationActiveLogPostResponse($this->client->request('/Wl/Location/LocationActiveLog.json', $request->params(), 'POST'));
    }
}
