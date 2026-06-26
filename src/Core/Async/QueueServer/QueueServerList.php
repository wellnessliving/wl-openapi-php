<?php

namespace WlSdk\Core\Async\QueueServer;

use WlSdk\WlSdkClient;

/**
 * Returns a list of queue servers.
 */
class QueueServerList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a list of queue servers.
     *
     * @return QueueServerListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QueueServerListGetRequest $request): QueueServerListGetResponse
    {
        return new QueueServerListGetResponse($this->client->request('/Core/Async/QueueServer/QueueServerList.json', $request->params(), 'GET'));
    }
}
