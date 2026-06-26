<?php

namespace WlSdk\Wl\Book\Cancel;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Book/Cancel/Cancel.json
 */
class Cancel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Book/Cancel/Cancel.json.
     *
     * @return CancelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CancelPostRequest $request): CancelPostResponse
    {
        return new CancelPostResponse($this->client->request('/Wl/Book/Cancel/Cancel.json', $request->params(), 'POST'));
    }
}
