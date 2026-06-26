<?php

namespace WlSdk\Core\Async\QueueServer;

use WlSdk\WlSdkClient;

/**
 * Disables or activates a queue server.
 */
class Disable
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Disables or activates a queue server.
     *
     * @return DisablePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DisablePostRequest $request): DisablePostResponse
    {
        return new DisablePostResponse($this->client->request('/Core/Async/QueueServer/Disable.json', $request->params(), 'POST'));
    }
}
