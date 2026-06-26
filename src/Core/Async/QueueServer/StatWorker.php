<?php

namespace WlSdk\Core\Async\QueueServer;

use WlSdk\WlSdkClient;

/**
 * Returns complete list of all workers in the system.
 */
class StatWorker
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns complete list of all workers in the system.
     *
     * @return StatWorkerGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StatWorkerGetRequest $request): StatWorkerGetResponse
    {
        return new StatWorkerGetResponse($this->client->request('/Core/Async/QueueServer/StatWorker.json', $request->params(), 'GET'));
    }
}
