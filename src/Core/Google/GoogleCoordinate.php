<?php

namespace WlSdk\Core\Google;

use WlSdk\WlSdkClient;

/**
 * Gets geo coordinates from address using Google Maps.
 */
class GoogleCoordinate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets geo coordinates from address using Google Maps.
     *
     * @return GoogleCoordinateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(GoogleCoordinateGetRequest $request): GoogleCoordinateGetResponse
    {
        return new GoogleCoordinateGetResponse($this->client->request('/Core/Google/GoogleCoordinate.json', $request->params(), 'GET'));
    }
}
