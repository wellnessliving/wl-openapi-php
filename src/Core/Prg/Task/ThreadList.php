<?php

namespace WlSdk\Core\Prg\Task;

use WlSdk\WlSdkClient;

/**
 * Get data about task threads.
 */
class ThreadList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get data about task threads.
     *
     * @return ThreadListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ThreadListGetRequest $request): ThreadListGetResponse
    {
        return new ThreadListGetResponse($this->client->request('/Core/Prg/Task/ThreadList.json', $request->params(), 'GET'));
    }
}
