<?php
namespace WlSdk\Wl\Business\Account;

use WlSdk\WlSdkClient;

/**
 * Generates list of active business keys for the same region as the requesting user (proper permissions required).
 */
class BusinessAccountApi
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
     * `true` returns WellnessLiving customers.

`false` returns prospects.

Test and churned businesses are never returned.
     *
     * @var bool|null
     */
    public ?bool $is_prospects = null;

    /**
     * Specifies if only businesses having published locations should be returned.
     *
     * @var bool|null
     */
    public ?bool $is_published = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Generates list of active business keys for the same region as the requesting user (proper permissions required).
     *
     * Used internally by WellnessLiving operations tools to enumerate all customer businesses in the current
     * region.
     * Returns only active, non-test businesses; set `is_prospects` to also include prospect businesses that have
     * not
     * yet churned. Requires the `rs.business.view` privilege.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_business_keys: A list of business keys.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/Account/BusinessAccount.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_prospects' => $this->is_prospects,
            'is_published' => $this->is_published,
            ],
            static fn($v) => $v !== null
        );
    }
}
