<?php

namespace WlSdk\Wl\Google\Booking;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Google/Booking/CreateBooking.json
 */
class CreateBooking
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Google/Booking/CreateBooking.json.
     *
     * @return CreateBookingPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CreateBookingPostRequest $request): CreateBookingPostResponse
    {
        return new CreateBookingPostResponse($this->client->request('/Wl/Google/Booking/CreateBooking.json', $request->params(), 'POST'));
    }
}
