<?php
namespace WlSdk\Wl\Login\Search\StaffApp;

use WlSdk\WlSdkClient;

/**
 * Performs access checks and returns a list of users, depending on the search query.
 */
class ListApi
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
     * `true` - search among whole franchise; `false` - search in specified business only.
     *
     * @var bool|null
     */
    public ?bool $is_franchisee_search_wide = null;

    /**
     * The business key number used internally by WellnessLiving.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The search string. Clients can be matched by name or email.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs access checks and returns a list of users, depending on the search query.
     *
     * When a search string is provided, returns clients whose name or email matches the query within the specified
     * business. When the search string is empty, returns recently viewed clients. Each result includes the
     * client's
     * name, email, phone, member ID, and user key.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_list: No description.
     *   - bool can_add: If `true`, then this user can add other users via the Add Client page.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Search/StaffApp/List.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_franchisee_search_wide' => $this->is_franchisee_search_wide,
            'k_business' => $this->k_business,
            'text_search' => $this->text_search,
            ],
            static fn($v) => $v !== null
        );
    }
}
