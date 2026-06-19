<?php
namespace WlSdk\Wl\Business\AuthorizePartner;

use WlSdk\WlSdkClient;

/**
 * Grants or denies access to business location for a partner.
 */
class AuthorizePartnerApi
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
     * Determines whether the user will be granted access or if access will be revoked.
If `true`, access will be granted. If `false`, access will be revoked.
Revoking access is a scheduled task set to be run within the next 15 minutes.
     *
     * @var bool|null
     */
    public ?bool $is_grant = null;

    /**
     * The key of the franchisee location to enter.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of the user who will be granted access.
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
     * Grants or denies access to business location for a partner.
     *
     * Allows a franchisor staff member to temporarily let another user into a franchisee location. Requires
     * the "Manage Franchise Location" privilege. Granted access expires after 24 hours; revoking schedules
     * removal within 15 minutes.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/AuthorizePartner/AuthorizePartner.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_grant' => $this->is_grant,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
