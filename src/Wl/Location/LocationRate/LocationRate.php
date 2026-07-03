<?php

namespace WlSdk\Wl\Location\LocationRate;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about location rate.
 */
class LocationRate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about location rate.
     *
     * Returns the average rating and review count for the location, along with whether rating is
     *  enabled for the business type the location belongs to.
     *
     * @return LocationRateGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LocationRateGetRequest $request): LocationRateGetResponse
    {
        return new LocationRateGetResponse($this->client->request('/Wl/Location/LocationRate/LocationRate.json', $request->params(), 'GET'));
    }
}
