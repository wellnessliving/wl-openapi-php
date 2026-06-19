<?php
namespace WlSdk\Wl\Login\Member;

use WlSdk\WlSdkClient;

/**
 * Returns a paginated list of active member user keys for the specified business.
 */
class LoginMemberListAllApi
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
     * The maximum number of members to return in the list.

Use with `uid_last` to get the next page of results.
     *
     * @var int|null
     */
    public ?int $i_page_size = null;

    /**
     * The key of the business to get a list of members for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The last member UID from the previous page.
Use with `i_page_size` to get the next page of results.
If empty, the first page of results is returned.
     *
     * @var string|null
     */
    public ?string $uid_last = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a paginated list of active member user keys for the specified business.
     *
     * Accepts a business key, an optional page size, and an optional last-seen user key for cursor-based
     * pagination,
     * then returns an ordered array of user keys for all active members of that business.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_uid: List of UIDs for all active clients that belong to the business.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Member/LoginMemberListAll.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'i_page_size' => $this->i_page_size,
            'k_business' => $this->k_business,
            'uid_last' => $this->uid_last,
            ],
            static fn($v) => $v !== null
        );
    }
}
