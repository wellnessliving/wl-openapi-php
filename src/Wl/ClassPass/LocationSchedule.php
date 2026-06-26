<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/ClassPass/LocationSchedule.json
 */
class LocationSchedule
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/ClassPass/LocationSchedule.json.
     *
     * @return LocationScheduleGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LocationScheduleGetRequest $request): LocationScheduleGetResponse
    {
        return new LocationScheduleGetResponse($this->client->request('/Wl/ClassPass/LocationSchedule.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/ClassPass/LocationSchedule.json.
     *
     * @return LocationSchedulePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LocationSchedulePostRequest $request): LocationSchedulePostResponse
    {
        return new LocationSchedulePostResponse($this->client->request('/Wl/ClassPass/LocationSchedule.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return LocationSchedulePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(LocationSchedulePutRequest $request): LocationSchedulePutResponse
    {
        return new LocationSchedulePutResponse($this->client->request('/Wl/ClassPass/LocationSchedule.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/ClassPass/LocationSchedule.json.
     *
     * @return LocationSchedulePatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(LocationSchedulePatchRequest $request): LocationSchedulePatchResponse
    {
        return new LocationSchedulePatchResponse($this->client->request('/Wl/ClassPass/LocationSchedule.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/LocationSchedule.json.
     *
     * @return LocationScheduleDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(LocationScheduleDeleteRequest $request): LocationScheduleDeleteResponse
    {
        return new LocationScheduleDeleteResponse($this->client->request('/Wl/ClassPass/LocationSchedule.json', $request->params(), 'DELETE'));
    }
}
