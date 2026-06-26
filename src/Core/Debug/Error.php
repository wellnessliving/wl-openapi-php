<?php

namespace WlSdk\Core\Debug;

use WlSdk\WlSdkClient;

/**
 * Logs new error occurred in browser.
 */
class Error
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Logs new error occurred in browser.
     *
     * @return ErrorPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ErrorPostRequest $request): ErrorPostResponse
    {
        return new ErrorPostResponse($this->client->request('/Core/Debug/Error.json', $request->params(), 'POST'));
    }
}
