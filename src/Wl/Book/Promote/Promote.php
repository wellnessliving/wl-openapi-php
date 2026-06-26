<?php

namespace WlSdk\Wl\Book\Promote;

use WlSdk\WlSdkClient;

/**
 * Promote visit.
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
     * Promote visit.
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
