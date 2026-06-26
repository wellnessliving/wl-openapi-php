<?php

namespace WlSdk\Core\Prg\Task;

use WlSdk\WlSdkClient;

/**
 * Clear all tasks from task queue.
 */
class RemoveAll
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Clear all tasks from task queue.
     *
     * @return RemoveAllPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RemoveAllPostRequest $request): RemoveAllPostResponse
    {
        return new RemoveAllPostResponse($this->client->request('/Core/Prg/Task/RemoveAll.json', $request->params(), 'POST'));
    }
}
