<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * Gets appointment reservation state.
 */
class AppointmentAttendance
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets appointment reservation state.
     *
     * @return AppointmentAttendanceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AppointmentAttendanceGetRequest $request): AppointmentAttendanceGetResponse
    {
        return new AppointmentAttendanceGetResponse($this->client->request('/Wl/ClassPass/AppointmentAttendance.json', $request->params(), 'GET'));
    }

    /**
     * Calls POST /Wl/ClassPass/AppointmentAttendance.json.
     *
     * @return AppointmentAttendancePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AppointmentAttendancePostRequest $request): AppointmentAttendancePostResponse
    {
        return new AppointmentAttendancePostResponse($this->client->request('/Wl/ClassPass/AppointmentAttendance.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return AppointmentAttendancePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(AppointmentAttendancePutRequest $request): AppointmentAttendancePutResponse
    {
        return new AppointmentAttendancePutResponse($this->client->request('/Wl/ClassPass/AppointmentAttendance.json', $request->params(), 'PUT'));
    }

    /**
     * Calls PATCH /Wl/ClassPass/AppointmentAttendance.json.
     *
     * @return AppointmentAttendancePatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(AppointmentAttendancePatchRequest $request): AppointmentAttendancePatchResponse
    {
        return new AppointmentAttendancePatchResponse($this->client->request('/Wl/ClassPass/AppointmentAttendance.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/AppointmentAttendance.json.
     *
     * @return AppointmentAttendanceDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AppointmentAttendanceDeleteRequest $request): AppointmentAttendanceDeleteResponse
    {
        return new AppointmentAttendanceDeleteResponse($this->client->request('/Wl/ClassPass/AppointmentAttendance.json', $request->params(), 'DELETE'));
    }
}
