<?php

namespace WlSdk\Wl\Book\Promote;

use WlSdk\WlSdkClient;

/**
 * Promotes a visit.
 */
class Promote
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Promotes a visit.
     *
     * Confirms a client's booking for a class or event, or marks it as promoted when no explicit
     *  confirmation is required. The visit must belong to the given business and must be a class
     *  or event booking - appointments are not supported by this endpoint. Returns a message that
     *  describes the outcome: confirmed, promoted, or promoted with a confirmation email pending.
     *
     * @return PromotePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PromotePostRequest $request): PromotePostResponse
    {
        return new PromotePostResponse($this->client->request('/Wl/Book/Promote/Promote.json', $request->params(), 'POST'));
    }
}
