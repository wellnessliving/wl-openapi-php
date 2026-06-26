<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/ClassPass/LocationList.json
 */
class LocationList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/ClassPass/LocationList.json.
     *
     * @return LocationListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LocationListGetRequest $request): LocationListGetResponse
    {
        return new LocationListGetResponse($this->client->request('/Wl/ClassPass/LocationList.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/ClassPass/LocationList.json.
     *
     * @return LocationListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LocationListPostRequest $request): LocationListPostResponse
    {
        return new LocationListPostResponse($this->client->request('/Wl/ClassPass/LocationList.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return LocationListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(LocationListPutRequest $request): LocationListPutResponse
    {
        return new LocationListPutResponse($this->client->request('/Wl/ClassPass/LocationList.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/ClassPass/LocationList.json.
     *
     * @return LocationListPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(LocationListPatchRequest $request): LocationListPatchResponse
    {
        return new LocationListPatchResponse($this->client->request('/Wl/ClassPass/LocationList.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/LocationList.json.
     *
     * @return LocationListDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LocationListDeleteRequest $request): LocationListDeleteResponse
    {
        return new LocationListDeleteResponse($this->client->request('/Wl/ClassPass/LocationList.json', $request->params(), 'DELETE'));
    }
}
