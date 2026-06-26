<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/ClassPass/ScheduleAttendance.json
 */
class ScheduleAttendance
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/ClassPass/ScheduleAttendance.json.
     *
     * @return ScheduleAttendanceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ScheduleAttendanceGetRequest $request): ScheduleAttendanceGetResponse
    {
        return new ScheduleAttendanceGetResponse($this->client->request('/Wl/ClassPass/ScheduleAttendance.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/ClassPass/ScheduleAttendance.json.
     *
     * @return ScheduleAttendancePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ScheduleAttendancePostRequest $request): ScheduleAttendancePostResponse
    {
        return new ScheduleAttendancePostResponse($this->client->request('/Wl/ClassPass/ScheduleAttendance.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return ScheduleAttendancePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ScheduleAttendancePutRequest $request): ScheduleAttendancePutResponse
    {
        return new ScheduleAttendancePutResponse($this->client->request('/Wl/ClassPass/ScheduleAttendance.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/ClassPass/ScheduleAttendance.json.
     *
     * @return ScheduleAttendancePatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(ScheduleAttendancePatchRequest $request): ScheduleAttendancePatchResponse
    {
        return new ScheduleAttendancePatchResponse($this->client->request('/Wl/ClassPass/ScheduleAttendance.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/ScheduleAttendance.json.
     *
     * @return ScheduleAttendanceDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ScheduleAttendanceDeleteRequest $request): ScheduleAttendanceDeleteResponse
    {
        return new ScheduleAttendanceDeleteResponse($this->client->request('/Wl/ClassPass/ScheduleAttendance.json', $request->params(), 'DELETE'));
    }
}
