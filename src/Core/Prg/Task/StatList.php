<?php

namespace WlSdk\Core\Prg\Task;

use WlSdk\WlSdkClient;

/**
 * Get statistic data about task queue.
 */
class StatList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get statistic data about task queue.
     *
     * @return StatListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StatListGetRequest $request): StatListGetResponse
    {
        return new StatListGetResponse($this->client->request('/Core/Prg/Task/StatList.json', $request->params(), 'GET'));
    }
}
