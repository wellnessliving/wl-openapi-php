<?php

namespace WlSdk\Wl\Insurance\Enrollment\Field;

use WlSdk\WlSdkClient;

/**
 * Returns the list of required partner fields for the specified wellness program.
 */
class EnrollmentFieldList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of required partner fields for the specified wellness program.
     *
     * Returns enrollment fields defined by the insurance partner along with reimbursement account fields if the
     * program requires reimbursement. Each field includes validation rules, display labels, and configuration
     * options for rendering the enrollment form.
     *
     * @return EnrollmentFieldListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(EnrollmentFieldListGetRequest $request): EnrollmentFieldListGetResponse
    {
        return new EnrollmentFieldListGetResponse($this->client->request('/Wl/Insurance/Enrollment/Field/EnrollmentFieldList.json', $request->params(), 'GET'));
    }

    /**
     * Validates the list of fields filled in by the user for enrollment.
     *
     * Accepts the values submitted by the user for the wellness program enrollment form and validates them
     * against the partner's field rules before passing them to the payment API.
     *
     * @return EnrollmentFieldListPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(EnrollmentFieldListPostRequest $request): EnrollmentFieldListPostResponse
    {
        return new EnrollmentFieldListPostResponse($this->client->request('/Wl/Insurance/Enrollment/Field/EnrollmentFieldList.json', $request->params(), 'POST'));
    }
}
