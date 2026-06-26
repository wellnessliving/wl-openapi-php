<?php

namespace WlSdk\Wl\Google\Booking;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Google/Booking/GetBookingStatus.json
 */
class GetBookingStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Google/Booking/GetBookingStatus.json.
     *
     * @return GetBookingStatusPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(GetBookingStatusPostRequest $request): GetBookingStatusPostResponse
    {
        return new GetBookingStatusPostResponse($this->client->request('/Wl/Google/Booking/GetBookingStatus.json', $request->params(), 'POST'));
    }
}
