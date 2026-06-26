<?php

namespace WlSdk\Wl\GymPass\Webhook;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/GymPass/Webhook/BookingCheckin.json
 */
class BookingCheckin
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/GymPass/Webhook/BookingCheckin.json.
     *
     * @return BookingCheckinPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BookingCheckinPostRequest $request): BookingCheckinPostResponse
    {
        return new BookingCheckinPostResponse($this->client->request('/Wl/GymPass/Webhook/BookingCheckin.json', $request->params(), 'POST'));
    }
}
