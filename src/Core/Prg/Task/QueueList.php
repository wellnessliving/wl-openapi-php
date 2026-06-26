<?php

namespace WlSdk\Core\Prg\Task;

use WlSdk\WlSdkClient;

/**
 * Get data about task queue.
 */
class QueueList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get data about task queue.
     *
     * @return QueueListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(QueueListGetRequest $request): QueueListGetResponse
    {
        return new QueueListGetResponse($this->client->request('/Core/Prg/Task/QueueList.json', $request->params(), 'GET'));
    }
}
