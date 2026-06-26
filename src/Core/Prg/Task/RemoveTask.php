<?php

namespace WlSdk\Core\Prg\Task;

use WlSdk\WlSdkClient;

/**
 * Remove tasks.
 */
class RemoveTask
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Remove tasks.
     *
     * @return RemoveTaskPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(RemoveTaskPostRequest $request): RemoveTaskPostResponse
    {
        return new RemoveTaskPostResponse($this->client->request('/Core/Prg/Task/RemoveTask.json', $request->params(), 'POST'));
    }
}
