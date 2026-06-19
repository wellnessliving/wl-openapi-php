<?php
namespace WlSdk\Wl\Insurance\Enrollment\Field;

use WlSdk\WlSdkClient;

/**
 * Returns the list of required partner fields for the specified wellness program.
 */
class EnrollmentFieldListApi
{
    /**
     * The key of the business in which the enrollment is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * "Wellness Program" key.
     *
     * @var string|null
     */
    public ?string $k_wellness_program = null;

    /**
     * Reimbursement account information.
     * 
     * Keys - field name.
     * Values - value entered by user.
     *
     * @var string[]|null
     */
    public ?array $a_account = null;

    /**
     * List of fields that the user has filled in for enrollment.
     * 
     * Keys refer specifically to field keys.
     * Values refer specifically to values entered by the user.
     *
     * @var string[]|null
     */
    public ?array $a_field = null;

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
     * @return EnrollmentFieldListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): EnrollmentFieldListApiGetResponse
    {
        return new EnrollmentFieldListApiGetResponse($this->client->request('/Wl/Insurance/Enrollment/Field/EnrollmentFieldList.json', $this->params(), 'GET'));
    }

    /**
     * Validates the list of fields filled in by the user for enrollment.
     *
     * Accepts the values submitted by the user for the wellness program enrollment form and validates them
     * against the partner's field rules before passing them to the payment API.
     *
     * @return EnrollmentFieldListApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): EnrollmentFieldListApiPostResponse
    {
        return new EnrollmentFieldListApiPostResponse($this->client->request('/Wl/Insurance/Enrollment/Field/EnrollmentFieldList.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_wellness_program' => $this->k_wellness_program,
            'a_account' => $this->a_account,
            'a_field' => $this->a_field,
            ],
            static fn($v) => $v !== null
        );
    }
}
