<?php

namespace WlSdk\Core\Prg\Task;

use WlSdk\WlSdkClient;

/**
 * Restart tasks.
 */
class RestartTask
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Restart tasks.
     *
     * @return RestartTaskPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RestartTaskPostRequest $request): RestartTaskPostResponse
    {
        return new RestartTaskPostResponse($this->client->request('/Core/Prg/Task/RestartTask.json', $request->params(), 'POST'));
    }
}
