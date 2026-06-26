<?php

namespace WlSdk\Wl\GymPass\Webhook;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/GymPass/Webhook/BookingCreate.json
 */
class BookingCreate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/GymPass/Webhook/BookingCreate.json.
     *
     * @return BookingCreatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BookingCreatePostRequest $request): BookingCreatePostResponse
    {
        return new BookingCreatePostResponse($this->client->request('/Wl/GymPass/Webhook/BookingCreate.json', $request->params(), 'POST'));
    }
}
