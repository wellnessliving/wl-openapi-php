<?php
namespace WlSdk\Wl\Insurance\Enrollment\Field;

use WlSdk\WlSdkClient;

/**
 * Validates the list of fields filled in by the user for enrollment.
 */
class EnrollmentFieldListPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
