<?php
namespace WlSdk\Wl\Purchase\Share;

use WlSdk\WlSdkClient;

/**
 * Records the purchase share action and returns the social network sharing URL.
 */
class PurchaseShareApi
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
     * The social network. One of the [ASocialSid](#/components/schemas/ASocialSid) constants.
     *
     * @var int|null
     */
    public ?int $id_social = null;

    /**
     * The key of the purchase.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Records the purchase share action and returns the social network sharing URL.
     *
     * Validates that the caller owns the purchase, prevents duplicate share actions, saves the share record,
     * and returns the social network URL for sharing.
     *
     * @return array Parsed JSON response data.
     *   - string url_share: The URL to the sharing page.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Purchase/Share/PurchaseShare.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'id_social' => $this->id_social,
            'k_purchase' => $this->k_purchase,
            ],
            static fn($v) => $v !== null
        );
    }
}
