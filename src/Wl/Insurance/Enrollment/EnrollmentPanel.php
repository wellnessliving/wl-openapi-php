<?php

namespace WlSdk\Wl\Insurance\Enrollment;

use WlSdk\WlSdkClient;

/**
 * Gets "Wellness Program" info and a list of required fields for enrollment.
 */
class EnrollmentPanel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets "Wellness Program" info and a list of required fields for enrollment.
     *
     * If we open the already purchased program, then the fields will be filled in with the entered data during
     * enrollment.
     *
     * @return EnrollmentPanelGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EnrollmentPanelGetRequest $request): EnrollmentPanelGetResponse
    {
        return new EnrollmentPanelGetResponse($this->client->request('/Wl/Insurance/Enrollment/EnrollmentPanel.json', $request->params(), 'GET'));
    }

    /**
     * Validates list of fields that the user has filled in for enrollment.
     *
     * @return EnrollmentPanelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EnrollmentPanelPostRequest $request): EnrollmentPanelPostResponse
    {
        return new EnrollmentPanelPostResponse($this->client->request('/Wl/Insurance/Enrollment/EnrollmentPanel.json', $request->params(), 'POST'));
    }

    /**
     * Validates and modifies the fields of the purchased program.
     *
     * @return EnrollmentPanelPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(EnrollmentPanelPutRequest $request): EnrollmentPanelPutResponse
    {
        return new EnrollmentPanelPutResponse($this->client->request('/Wl/Insurance/Enrollment/EnrollmentPanel.json', $request->params(), 'PUT'));
    }
}
