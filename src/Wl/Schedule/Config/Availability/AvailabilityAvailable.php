<?php

namespace WlSdk\Wl\Schedule\Config\Availability;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Schedule/Config/Availability/AvailabilityAvailable.json
 */
class AvailabilityAvailable
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Schedule/Config/Availability/AvailabilityAvailable.json.
     *
     * @return AvailabilityAvailableGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AvailabilityAvailableGetRequest $request): AvailabilityAvailableGetResponse
    {
        return new AvailabilityAvailableGetResponse($this->client->request('/Wl/Schedule/Config/Availability/AvailabilityAvailable.json', $request->params(), 'GET'));
    }
}
