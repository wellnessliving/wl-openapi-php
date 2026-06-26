<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/ClassPass/ReservationList.json
 */
class ReservationList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/ClassPass/ReservationList.json.
     *
     * @return ReservationListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReservationListGetRequest $request): ReservationListGetResponse
    {
        return new ReservationListGetResponse($this->client->request('/Wl/ClassPass/ReservationList.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/ClassPass/ReservationList.json.
     *
     * @return ReservationListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReservationListPostRequest $request): ReservationListPostResponse
    {
        return new ReservationListPostResponse($this->client->request('/Wl/ClassPass/ReservationList.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return ReservationListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ReservationListPutRequest $request): ReservationListPutResponse
    {
        return new ReservationListPutResponse($this->client->request('/Wl/ClassPass/ReservationList.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/ClassPass/ReservationList.json.
     *
     * @return ReservationListPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(ReservationListPatchRequest $request): ReservationListPatchResponse
    {
        return new ReservationListPatchResponse($this->client->request('/Wl/ClassPass/ReservationList.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/ReservationList.json.
     *
     * @return ReservationListDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ReservationListDeleteRequest $request): ReservationListDeleteResponse
    {
        return new ReservationListDeleteResponse($this->client->request('/Wl/ClassPass/ReservationList.json', $request->params(), 'DELETE'));
    }
}
