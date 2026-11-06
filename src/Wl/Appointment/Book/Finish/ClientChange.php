<?php

namespace WlSdk\Wl\Appointment\Book\Finish;

use WlSdk\WlSdkClient;

/**
 * Changes the client of an appointment in one atomic transaction.
 */
class ClientChange
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes the client of an appointment in one atomic transaction.
     *
     * Ends the original client's visit (an early cancel without a fee, or the denial of the request), then books
     * the new client. If the booking fails, the whole transaction is rolled back: neither the ending of the visit
     * nor the booking is committed.
     *
     * Returns the newly booked appointment data in {@link
     * \WlSdk\Wl\Appointment\Book\Finish\ClientChangePostResponse::$a_appointment},
     * {@link \WlSdk\Wl\Appointment\Book\Finish\ClientChangePostResponse::$a_login_activity_visit}, {@link
     * \WlSdk\Wl\Appointment\Book\Finish\ClientChangePostResponse::$a_visit}
     * and {@link \WlSdk\Wl\Appointment\Book\Finish\ClientChangePostResponse::$a_visit_provider}.
     *
     * @return ClientChangePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ClientChangePostRequest $request): ClientChangePostResponse
    {
        return new ClientChangePostResponse($this->client->request('/Wl/Appointment/Book/Finish/ClientChange.json', $request->params(), 'POST'));
    }
}
