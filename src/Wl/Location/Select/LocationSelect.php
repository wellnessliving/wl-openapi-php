<?php

namespace WlSdk\Wl\Location\Select;

use WlSdk\WlSdkClient;

/**
 * Performs checks and generates a list of locations according to a given configuration.
 */
class LocationSelect
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs checks and generates a list of locations according to a given configuration.
     *
     * @return LocationSelectGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LocationSelectGetRequest $request): LocationSelectGetResponse
    {
        return new LocationSelectGetResponse($this->client->request('/Wl/Location/Select/LocationSelect.json', $request->params(), 'GET'));
    }
}
