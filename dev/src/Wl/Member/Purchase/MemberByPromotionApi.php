<?php
namespace WlSdk\Wl\Member\Purchase;

use WlSdk\WlSdkClient;

/**
 * Returns active clients holding at least one active Purchase Option from the specified list.
 */
class MemberByPromotionApi
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
     * The key of the business for which to get a list of clients.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The comma-separated list of the Purchase Option keys.
Only active clients with at least one active Purchase Option from this list will be returned.

For example: '324,123,11,556'
     *
     * @var string|null
     */
    public ?string $s_promotion_keys = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns active clients holding at least one active Purchase Option from the specified list.
     *
     * Accepts a comma-separated list of Purchase Option keys, validates them against the business, and returns
     * all active clients who hold at least one non-expired, non-limited Purchase Option from that list.
     * Clients to which the currently signed-in user has no profile access are excluded from the result.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_clients: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Member/Purchase/MemberByPromotion.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            's_promotion_keys' => $this->s_promotion_keys,
            ],
            static fn($v) => $v !== null
        );
    }
}
