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
     * Ignores errors reported by bots and monitoring user agents. Accepts up to
     *  `MAX_ERROR` errors per request, discarding any extra entries. Each error is
     *  written to the debug log: variable errors are logged as-is together with the current session
     *  and user agent, while structured error records are formatted into a message that includes the
     *  file, line number, browser, and stack trace when available.
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
