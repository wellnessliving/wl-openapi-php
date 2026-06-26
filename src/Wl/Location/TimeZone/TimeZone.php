<?php

namespace WlSdk\Wl\Location\TimeZone;

use WlSdk\WlSdkClient;

/**
 * Gets timezone of passed coordinates.
 */
class TimeZone
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets timezone of passed coordinates.
     *
     * @return TimeZoneGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TimeZoneGetRequest $request): TimeZoneGetResponse
    {
        return new TimeZoneGetResponse($this->client->request('/Wl/Location/TimeZone/TimeZone.json', $request->params(), 'GET'));
    }

    /**
     * Contact Google Maps API to get the timezone for a given location.
     *
     * @return TimeZonePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TimeZonePostRequest $request): TimeZonePostResponse
    {
        return new TimeZonePostResponse($this->client->request('/Wl/Location/TimeZone/TimeZone.json', $request->params(), 'POST'));
    }
}
