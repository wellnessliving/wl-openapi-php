<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/ClassPass/BusinessList.json
 */
class BusinessList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/ClassPass/BusinessList.json.
     *
     * @return BusinessListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessListGetRequest $request): BusinessListGetResponse
    {
        return new BusinessListGetResponse($this->client->request('/Wl/ClassPass/BusinessList.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/ClassPass/BusinessList.json.
     *
     * @return BusinessListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessListPostRequest $request): BusinessListPostResponse
    {
        return new BusinessListPostResponse($this->client->request('/Wl/ClassPass/BusinessList.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return BusinessListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(BusinessListPutRequest $request): BusinessListPutResponse
    {
        return new BusinessListPutResponse($this->client->request('/Wl/ClassPass/BusinessList.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/ClassPass/BusinessList.json.
     *
     * @return BusinessListPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(BusinessListPatchRequest $request): BusinessListPatchResponse
    {
        return new BusinessListPatchResponse($this->client->request('/Wl/ClassPass/BusinessList.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/BusinessList.json.
     *
     * @return BusinessListDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(BusinessListDeleteRequest $request): BusinessListDeleteResponse
    {
        return new BusinessListDeleteResponse($this->client->request('/Wl/ClassPass/BusinessList.json', $request->params(), 'DELETE'));
    }
}
