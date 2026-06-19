<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Returns the list of businesses where the specified user is an active member.
 */
class MemberApi
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
     * The user's key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Primary key of the business to add the user into.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of businesses where the specified user is an active member.
     *
     * Accepts a user key and returns all active businesses where that user has a membership, including franchise
     * relationship flags, business title, and whether the user is allowed to sign in to each business. Forwards
     * the
     * request to other data centers in multi-region deployments and merges the results.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_business: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Member/Member.json', $this->params(), 'GET');
    }

    /**
     * Adds a user into a business.
     *
     * Validates that the current user has profile access, then registers the specified user as a member of the
     * given
     * business without sending a registration email.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Login/Member/Member.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'uid' => $this->uid,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
