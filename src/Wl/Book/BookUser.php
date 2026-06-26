<?php

namespace WlSdk\Wl\Book;

use WlSdk\WlSdkClient;

/**
 * Saves a list of client who a class session must be booked for into session.
 */
class BookUser
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves a list of client who a class session must be booked for into session.
     *
     * @return BookUserPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BookUserPostRequest $request): BookUserPostResponse
    {
        return new BookUserPostResponse($this->client->request('/Wl/Book/BookUser.json', $request->params(), 'POST'));
    }
}
