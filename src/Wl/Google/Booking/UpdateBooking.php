<?php

namespace WlSdk\Wl\Google\Booking;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Google/Booking/UpdateBooking.json
 */
class UpdateBooking
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Google/Booking/UpdateBooking.json.
     *
     * @return UpdateBookingPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(UpdateBookingPostRequest $request): UpdateBookingPostResponse
    {
        return new UpdateBookingPostResponse($this->client->request('/Wl/Google/Booking/UpdateBooking.json', $request->params(), 'POST'));
    }
}
