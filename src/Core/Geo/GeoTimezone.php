<?php

namespace WlSdk\Core\Geo;

use WlSdk\WlSdkClient;

/**
 * Gets timezone by time offset.
 */
class GeoTimezone
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets timezone by time offset.
     *
     * @return GeoTimezoneGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(GeoTimezoneGetRequest $request): GeoTimezoneGetResponse
    {
        return new GeoTimezoneGetResponse($this->client->request('/Core/Geo/GeoTimezone.json', $request->params(), 'GET'));
    }
}
