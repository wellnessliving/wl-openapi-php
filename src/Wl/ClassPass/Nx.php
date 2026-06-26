<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/ClassPass/Nx.json
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
     * Calls GET /Wl/ClassPass/Nx.json.
     *
     * @return NxGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(NxGetRequest $request): NxGetResponse
    {
        return new NxGetResponse($this->client->request('/Wl/ClassPass/Nx.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/ClassPass/Nx.json.
     *
     * @return NxPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NxPostRequest $request): NxPostResponse
    {
        return new NxPostResponse($this->client->request('/Wl/ClassPass/Nx.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return NxPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(NxPutRequest $request): NxPutResponse
    {
        return new NxPutResponse($this->client->request('/Wl/ClassPass/Nx.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/ClassPass/Nx.json.
     *
     * @return NxPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(NxPatchRequest $request): NxPatchResponse
    {
        return new NxPatchResponse($this->client->request('/Wl/ClassPass/Nx.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/Nx.json.
     *
     * @return NxDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(NxDeleteRequest $request): NxDeleteResponse
    {
        return new NxDeleteResponse($this->client->request('/Wl/ClassPass/Nx.json', $request->params(), 'DELETE'));
    }
}
