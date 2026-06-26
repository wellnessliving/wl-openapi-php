<?php

namespace WlSdk\Wl\Import\Pay;

use WlSdk\WlSdkClient;

/**
 * Aborts a running import.
 */
class Abort
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Aborts a running import.
     *
     * @return AbortPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AbortPostRequest $request): AbortPostResponse
    {
        return new AbortPostResponse($this->client->request('/Wl/Import/Pay/Abort.json', $request->params(), 'POST'));
    }
}
