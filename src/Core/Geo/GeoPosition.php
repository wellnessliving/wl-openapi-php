<?php

namespace WlSdk\Core\Geo;

use WlSdk\WlSdkClient;

/**
 * Gets current geo position.
 */
class GeoPosition
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets current geo position.
     *
     * @return GeoPositionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(GeoPositionGetRequest $request): GeoPositionGetResponse
    {
        return new GeoPositionGetResponse($this->client->request('/Core/Geo/GeoPosition.json', $request->params(), 'GET'));
    }
}
