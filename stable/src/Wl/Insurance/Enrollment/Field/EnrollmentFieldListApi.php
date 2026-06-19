<?php
namespace WlSdk\Wl\Insurance\Enrollment\Field;

use WlSdk\WlSdkClient;

/**
 * Returns the list of required partner fields for the specified wellness program.
 */
class EnrollmentFieldListApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

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

Keys - field name.
Values - value entered by user.
     *
     * @var string[]|null
     */
    public ?array $a_account = null;

    /**
     * List of fields that the user has filled in for enrollment.

Keys refer specifically to field keys. 
Values refer specifically to values entered by the user.
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
     * @return array Parsed JSON response data.
     *   - array[] a_field_list: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Insurance/Enrollment/Field/EnrollmentFieldList.json', $this->params(), 'GET');
    }

    /**
     * Validates the list of fields filled in by the user for enrollment.
     *
     * Accepts the values submitted by the user for the wellness program enrollment form and validates them
     * against the partner's field rules before passing them to the payment API.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Insurance/Enrollment/Field/EnrollmentFieldList.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_wellness_program' => $this->k_wellness_program,
            'a_account' => $this->a_account,
            'a_field' => $this->a_field,
            ],
            static fn($v) => $v !== null
        );
    }
}
