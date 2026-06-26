<?php

namespace WlSdk\Wl\Google\Booking;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Google/Booking/CheckAvailability.json
 */
class CheckAvailability
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Google/Booking/CheckAvailability.json.
     *
     * @return CheckAvailabilityPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CheckAvailabilityPostRequest $request): CheckAvailabilityPostResponse
    {
        return new CheckAvailabilityPostResponse($this->client->request('/Wl/Google/Booking/CheckAvailability.json', $request->params(), 'POST'));
    }
}
