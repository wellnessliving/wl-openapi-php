<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/ClassPass/ReservationData.json
 */
class ReservationData
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/ClassPass/ReservationData.json.
     *
     * @return ReservationDataGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReservationDataGetRequest $request): ReservationDataGetResponse
    {
        return new ReservationDataGetResponse($this->client->request('/Wl/ClassPass/ReservationData.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/ClassPass/ReservationData.json.
     *
     * @return ReservationDataPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReservationDataPostRequest $request): ReservationDataPostResponse
    {
        return new ReservationDataPostResponse($this->client->request('/Wl/ClassPass/ReservationData.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return ReservationDataPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ReservationDataPutRequest $request): ReservationDataPutResponse
    {
        return new ReservationDataPutResponse($this->client->request('/Wl/ClassPass/ReservationData.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/ClassPass/ReservationData.json.
     *
     * @return ReservationDataPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(ReservationDataPatchRequest $request): ReservationDataPatchResponse
    {
        return new ReservationDataPatchResponse($this->client->request('/Wl/ClassPass/ReservationData.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/ReservationData.json.
     *
     * @return ReservationDataDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ReservationDataDeleteRequest $request): ReservationDataDeleteResponse
    {
        return new ReservationDataDeleteResponse($this->client->request('/Wl/ClassPass/ReservationData.json', $request->params(), 'DELETE'));
    }
}
