<?php

namespace WlSdk\Wl\Google\Booking;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Google/Booking/ListBookings.json
 */
class ListBookings
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Google/Booking/ListBookings.json.
     *
     * @return ListBookingsPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ListBookingsPostRequest $request): ListBookingsPostResponse
    {
        return new ListBookingsPostResponse($this->client->request('/Wl/Google/Booking/ListBookings.json', $request->params(), 'POST'));
    }
}
