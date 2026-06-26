<?php

namespace WlSdk\Core\Prg\AsyncTask;

use WlSdk\WlSdkClient;

/**
 * Get information about asynchronous task.
 */
class AsyncThreadList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get information about asynchronous task.
     *
     * @return AsyncThreadListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AsyncThreadListGetRequest $request): AsyncThreadListGetResponse
    {
        return new AsyncThreadListGetResponse($this->client->request('/Core/Prg/AsyncTask/AsyncThreadList.json', $request->params(), 'GET'));
    }

    /**
     * Run asynchronous task again.
     *
     * @return AsyncThreadListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(AsyncThreadListPutRequest $request): AsyncThreadListPutResponse
    {
        return new AsyncThreadListPutResponse($this->client->request('/Core/Prg/AsyncTask/AsyncThreadList.json', $request->params(), 'PUT'));
    }

    /**
     * Delete asynchronous task.
     *
     * @return AsyncThreadListDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AsyncThreadListDeleteRequest $request): AsyncThreadListDeleteResponse
    {
        return new AsyncThreadListDeleteResponse($this->client->request('/Core/Prg/AsyncTask/AsyncThreadList.json', $request->params(), 'DELETE'));
    }
}
