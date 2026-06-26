<?php

namespace WlSdk\Core\Request\Api;

use WlSdk\WlSdkClient;

/**
 * Only throws exception.
 */
class Nx
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Only throws exception.
     *
     * @return NxGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(NxGetRequest $request): NxGetResponse
    {
        return new NxGetResponse($this->client->request('/Core/Request/Api/Nx.json', $request->params(), 'GET'));
    }

    /**
     * Only throws exception.
     *
     * @return NxPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NxPostRequest $request): NxPostResponse
    {
        return new NxPostResponse($this->client->request('/Core/Request/Api/Nx.json', $request->params(), 'POST'));
    }

    /**
     * Only throws exception.
     *
     * @return NxPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(NxPutRequest $request): NxPutResponse
    {
        return new NxPutResponse($this->client->request('/Core/Request/Api/Nx.json', $request->params(), 'PUT'));
    }

    /**
     * Only throws exception.
     *
     * @return NxDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(NxDeleteRequest $request): NxDeleteResponse
    {
        return new NxDeleteResponse($this->client->request('/Core/Request/Api/Nx.json', $request->params(), 'DELETE'));
    }
}
