<?php
namespace WlSdk\Wl\Insurance\Enrollment\Field;

use WlSdk\WlSdkClient;

/**
 * Returns the list of required partner fields for the specified wellness program.
 */
class EnrollmentFieldListGet
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
}
