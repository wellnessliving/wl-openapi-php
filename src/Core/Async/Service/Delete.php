<?php

namespace WlSdk\Core\Async\Service;

use WlSdk\WlSdkClient;

/**
 * Removes all tasks of specified function from task queue.
 */
class Delete
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Removes all tasks of specified function from task queue.
     *
     * @return DeletePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(DeletePostRequest $request): DeletePostResponse
    {
        return new DeletePostResponse($this->client->request('/Core/Async/Service/Delete.json', $request->params(), 'POST'));
    }
}
