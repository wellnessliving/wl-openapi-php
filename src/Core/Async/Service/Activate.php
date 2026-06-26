<?php

namespace WlSdk\Core\Async\Service;

use WlSdk\WlSdkClient;

/**
 * Activates or deactivates a worker server.
 */
class Activate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Activates or deactivates a worker server.
     *
     * @return ActivatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ActivatePostRequest $request): ActivatePostResponse
    {
        return new ActivatePostResponse($this->client->request('/Core/Async/Service/Activate.json', $request->params(), 'POST'));
    }
}
