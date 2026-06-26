<?php

namespace WlSdk\Core\Async\QueueServer;

use WlSdk\WlSdkClient;

/**
 * Returns complete list of all functions in the system.
 */
class StatFunction
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns complete list of all functions in the system.
     *
     * @return StatFunctionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(StatFunctionGetRequest $request): StatFunctionGetResponse
    {
        return new StatFunctionGetResponse($this->client->request('/Core/Async/QueueServer/StatFunction.json', $request->params(), 'GET'));
    }
}
