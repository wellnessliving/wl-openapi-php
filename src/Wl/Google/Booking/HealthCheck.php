<?php

namespace WlSdk\Wl\Google\Booking;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Google/Booking/HealthCheck.json
 */
class HealthCheck
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Google/Booking/HealthCheck.json.
     *
     * @return HealthCheckGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(HealthCheckGetRequest $request): HealthCheckGetResponse
    {
        return new HealthCheckGetResponse($this->client->request('/Wl/Google/Booking/HealthCheck.json', $request->params(), 'GET'));
    }
}
