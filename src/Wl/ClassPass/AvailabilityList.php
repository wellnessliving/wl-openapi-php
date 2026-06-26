<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * Retrieves list of all services.
 */
class AvailabilityList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves list of all services.
     *
     * @return AvailabilityListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AvailabilityListGetRequest $request): AvailabilityListGetResponse
    {
        return new AvailabilityListGetResponse($this->client->request('/Wl/ClassPass/AvailabilityList.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/ClassPass/AvailabilityList.json.
     *
     * @return AvailabilityListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AvailabilityListPostRequest $request): AvailabilityListPostResponse
    {
        return new AvailabilityListPostResponse($this->client->request('/Wl/ClassPass/AvailabilityList.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return AvailabilityListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(AvailabilityListPutRequest $request): AvailabilityListPutResponse
    {
        return new AvailabilityListPutResponse($this->client->request('/Wl/ClassPass/AvailabilityList.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/ClassPass/AvailabilityList.json.
     *
     * @return AvailabilityListPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(AvailabilityListPatchRequest $request): AvailabilityListPatchResponse
    {
        return new AvailabilityListPatchResponse($this->client->request('/Wl/ClassPass/AvailabilityList.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/AvailabilityList.json.
     *
     * @return AvailabilityListDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AvailabilityListDeleteRequest $request): AvailabilityListDeleteResponse
    {
        return new AvailabilityListDeleteResponse($this->client->request('/Wl/ClassPass/AvailabilityList.json', $request->params(), 'DELETE'));
    }
}
