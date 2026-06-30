<?php

namespace WlSdk\Wl\Tuition\Enrollment;

use WlSdk\WlSdkClient;

/**
 * Allows canceling certain event enrollments within tuition.
 */
class TuitionEnrollmentCancel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Allows canceling certain event enrollments within tuition.
     *
     * Send all users and events, which should be canceled to reduce tuition payment, cancel visits, and deactivate
     * even pass.
     *
     * @return TuitionEnrollmentCancelPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(TuitionEnrollmentCancelPutRequest $request): TuitionEnrollmentCancelPutResponse
    {
        return new TuitionEnrollmentCancelPutResponse($this->client->request('/Wl/Tuition/Enrollment/TuitionEnrollmentCancel.json', $request->params(), 'PUT'));
    }
}
