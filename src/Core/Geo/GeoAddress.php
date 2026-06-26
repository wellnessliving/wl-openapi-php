<?php

namespace WlSdk\Core\Geo;

use WlSdk\WlSdkClient;

/**
 * Gets name of city and keys of GEO country and region.
 */
class GeoAddress
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets name of city and keys of GEO country and region.
     *
     * @return GeoAddressGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(GeoAddressGetRequest $request): GeoAddressGetResponse
    {
        return new GeoAddressGetResponse($this->client->request('/Core/Geo/GeoAddress.json', $request->params(), 'GET'));
    }
}
