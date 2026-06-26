<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/ClassPass/BusinessData.json
 */
class BusinessData
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/ClassPass/BusinessData.json.
     *
     * @return BusinessDataGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessDataGetRequest $request): BusinessDataGetResponse
    {
        return new BusinessDataGetResponse($this->client->request('/Wl/ClassPass/BusinessData.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/ClassPass/BusinessData.json.
     *
     * @return BusinessDataPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessDataPostRequest $request): BusinessDataPostResponse
    {
        return new BusinessDataPostResponse($this->client->request('/Wl/ClassPass/BusinessData.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return BusinessDataPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(BusinessDataPutRequest $request): BusinessDataPutResponse
    {
        return new BusinessDataPutResponse($this->client->request('/Wl/ClassPass/BusinessData.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/ClassPass/BusinessData.json.
     *
     * @return BusinessDataPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(BusinessDataPatchRequest $request): BusinessDataPatchResponse
    {
        return new BusinessDataPatchResponse($this->client->request('/Wl/ClassPass/BusinessData.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/BusinessData.json.
     *
     * @return BusinessDataDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(BusinessDataDeleteRequest $request): BusinessDataDeleteResponse
    {
        return new BusinessDataDeleteResponse($this->client->request('/Wl/ClassPass/BusinessData.json', $request->params(), 'DELETE'));
    }
}
