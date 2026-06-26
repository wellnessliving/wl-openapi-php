<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * Retrieves list of all services.
 */
class ServiceList
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
     * @return ServiceListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ServiceListGetRequest $request): ServiceListGetResponse
    {
        return new ServiceListGetResponse($this->client->request('/Wl/ClassPass/ServiceList.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/ClassPass/ServiceList.json.
     *
     * @return ServiceListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ServiceListPostRequest $request): ServiceListPostResponse
    {
        return new ServiceListPostResponse($this->client->request('/Wl/ClassPass/ServiceList.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return ServiceListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ServiceListPutRequest $request): ServiceListPutResponse
    {
        return new ServiceListPutResponse($this->client->request('/Wl/ClassPass/ServiceList.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/ClassPass/ServiceList.json.
     *
     * @return ServiceListPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(ServiceListPatchRequest $request): ServiceListPatchResponse
    {
        return new ServiceListPatchResponse($this->client->request('/Wl/ClassPass/ServiceList.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/ServiceList.json.
     *
     * @return ServiceListDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ServiceListDeleteRequest $request): ServiceListDeleteResponse
    {
        return new ServiceListDeleteResponse($this->client->request('/Wl/ClassPass/ServiceList.json', $request->params(), 'DELETE'));
    }
}
