<?php
namespace WlSdk\Wl\Business\Claim;

use WlSdk\WlSdkClient;

/**
 * Checks if the email or phone number has already been used for a trial account or not.
 */
class BusinessClaimApi
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
     * The email address of the location.

Urlencoded email address is expected.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The phone number of the business, staff and location.

Urlencoded phone number is expected.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * The key of the business to be verified.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the location to be verified.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the user who verified the business.
     *
     * @var string|null
     */
    public ?string $uid_verified = null;

    /**
     * The Self-Setup wizard form data to be saved in the business claim log.

The structure is conditionally arbitrary and is used only for logging purposes.
No specific keys are required or validated.
     *
     * @var string[]|null
     */
    public ?array $a_form = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if the email or phone number has already been used for a trial account or not.
     *
     * Called during the self-onboarding flow before creating a new business to detect duplicate registrations
     * early. Checks across all data center regions. Rate-limited per IP to prevent abuse.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/Claim/BusinessClaim.json', $this->params(), 'GET');
    }

    /**
     * Completes the verification process of the trial business.
     *
     * Used by WellnessLiving staff to confirm a new trial business after reviewing the signup. Marks the
     * business as verified by the approving user. Returns the location microsite URL so the staff member
     * can share it with the new client.
     *
     * @return array Parsed JSON response data.
     *   - string url_microsite: Location microsite URL.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Business/Claim/BusinessClaim.json', $this->params(), 'POST');
    }

    /**
     * Saves the Self-Setup wizard form data in the business claim log.
     *
     * Called at the end of the Self-Setup wizard to store the wizard input for internal auditing. Can only
     * be called once per business after it has been claimed.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Business/Claim/BusinessClaim.json', $this->params(), 'PUT');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'text_mail' => $this->text_mail,
            'text_phone' => $this->text_phone,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid_verified' => $this->uid_verified,
            'a_form' => $this->a_form,
            ],
            static fn($v) => $v !== null
        );
    }
}
