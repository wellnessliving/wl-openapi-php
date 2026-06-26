<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/ClassPass/LocationData.json
 */
class LocationData
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/ClassPass/LocationData.json.
     *
     * @return LocationDataGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LocationDataGetRequest $request): LocationDataGetResponse
    {
        return new LocationDataGetResponse($this->client->request('/Wl/ClassPass/LocationData.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/ClassPass/LocationData.json.
     *
     * @return LocationDataPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LocationDataPostRequest $request): LocationDataPostResponse
    {
        return new LocationDataPostResponse($this->client->request('/Wl/ClassPass/LocationData.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return LocationDataPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(LocationDataPutRequest $request): LocationDataPutResponse
    {
        return new LocationDataPutResponse($this->client->request('/Wl/ClassPass/LocationData.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/ClassPass/LocationData.json.
     *
     * @return LocationDataPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(LocationDataPatchRequest $request): LocationDataPatchResponse
    {
        return new LocationDataPatchResponse($this->client->request('/Wl/ClassPass/LocationData.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/LocationData.json.
     *
     * @return LocationDataDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LocationDataDeleteRequest $request): LocationDataDeleteResponse
    {
        return new LocationDataDeleteResponse($this->client->request('/Wl/ClassPass/LocationData.json', $request->params(), 'DELETE'));
    }
}
