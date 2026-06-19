<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Checks whether anything prevents the user from using the business and returns details about missing required fields.
 */
class MemberValidate63Api
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
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user's key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks whether anything prevents the user from using the business and returns details about missing required fields.
     *
     * Extends the base validation by additionally returning separate lists of missing profile fields grouped by
     * their
     * required context: booking and purchase, self-registration, or general requirement.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_empty_fields_booking: No description.
     *   - array[] a_empty_fields_registration: No description.
     *   - array[] a_empty_fields_required: No description.
     *   - bool has_credit_card: `true` If the user has credit cards on profile, otherwise `false`.
     *   - bool has_outstanding_contract: `true` if the user has an outstanding contract, otherwise `false`.
     *   - bool has_outstanding_waiver: `true` If the user has an outstanding waiver for the business, otherwise `false`.
     *   - bool has_pending_quizzes: `true` If the user has pending registration quizzes to complete, otherwise `false`.
     *   - bool is_booking_require_card: `true` If the user has to provide credit card details before booking, otherwise `false`.
     *   - bool is_register_require_card: `true` If the user has to provide credit card details to finish their registration, otherwise `false`.
     *   - string k_location: Home user`s location.
`null` if user has not home location.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Member/MemberValidate63.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
