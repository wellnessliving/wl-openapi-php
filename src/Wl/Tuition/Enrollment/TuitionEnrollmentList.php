<?php

namespace WlSdk\Wl\Tuition\Enrollment;

use WlSdk\WlSdkClient;

/**
 * Returns list of enrollments for the tuition.
 */
class TuitionEnrollmentList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of enrollments for the tuition.
     *
     * Get a full list of users who purchased the tuition. For each enrollment, returns the list of events
     * and the users have been enrolled in.
     *
     * @return TuitionEnrollmentListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TuitionEnrollmentListGetRequest $request): TuitionEnrollmentListGetResponse
    {
        return new TuitionEnrollmentListGetResponse($this->client->request('/Wl/Tuition/Enrollment/TuitionEnrollmentList.json', $request->params(), 'GET'));
    }
}
