<?php

namespace WlSdk\Wl\ClassPass;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/ClassPass/AppointmentEdit.json
 */
class AppointmentEdit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/ClassPass/AppointmentEdit.json.
     *
     * @return AppointmentEditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AppointmentEditGetRequest $request): AppointmentEditGetResponse
    {
        return new AppointmentEditGetResponse($this->client->request('/Wl/ClassPass/AppointmentEdit.json', $request->params(), 'GET'));
    }

    /**
     * Makes appointment reservation.
     *
     * @return AppointmentEditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AppointmentEditPostRequest $request): AppointmentEditPostResponse
    {
        return new AppointmentEditPostResponse($this->client->request('/Wl/ClassPass/AppointmentEdit.json', $request->params(), 'POST'));
    }

    /**
     * This method is called to process `PUT` query.
     *
     * @return AppointmentEditPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(AppointmentEditPutRequest $request): AppointmentEditPutResponse
    {
        return new AppointmentEditPutResponse($this->client->request('/Wl/ClassPass/AppointmentEdit.json', $request->params(), 'PUT'));
    }

    /**
     * Cancels appointment reservation.
     *
     * @return AppointmentEditPatchResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function patch(AppointmentEditPatchRequest $request): AppointmentEditPatchResponse
    {
        return new AppointmentEditPatchResponse($this->client->request('/Wl/ClassPass/AppointmentEdit.json', $request->params(), 'PATCH'));
    }

    /**
     * Calls DELETE /Wl/ClassPass/AppointmentEdit.json.
     *
     * @return AppointmentEditDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(AppointmentEditDeleteRequest $request): AppointmentEditDeleteResponse
    {
        return new AppointmentEditDeleteResponse($this->client->request('/Wl/ClassPass/AppointmentEdit.json', $request->params(), 'DELETE'));
    }
}
