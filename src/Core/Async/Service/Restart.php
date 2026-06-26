<?php

namespace WlSdk\Core\Async\Service;

use WlSdk\WlSdkClient;

/**
 * Restarts a thread or all threads at worker server or at all worker servers.
 */
class Restart
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Restarts a thread or all threads at worker server or at all worker servers.
     *
     * @return RestartPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RestartPostRequest $request): RestartPostResponse
    {
        return new RestartPostResponse($this->client->request('/Core/Async/Service/Restart.json', $request->params(), 'POST'));
    }
}
