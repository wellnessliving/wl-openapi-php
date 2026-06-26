<?php

namespace WlSdk\Wl\GymPass\Webhook;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/GymPass/Webhook/BookingCancel.json
 */
class BookingCancel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/GymPass/Webhook/BookingCancel.json.
     *
     * @return BookingCancelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BookingCancelPostRequest $request): BookingCancelPostResponse
    {
        return new BookingCancelPostResponse($this->client->request('/Wl/GymPass/Webhook/BookingCancel.json', $request->params(), 'POST'));
    }
}
