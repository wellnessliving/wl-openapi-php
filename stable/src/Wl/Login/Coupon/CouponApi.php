<?php
namespace WlSdk\Wl\Login\Coupon;

use WlSdk\WlSdkClient;

/**
 * Retrieves the key and balance of a gift card by its code for the specified business.
 */
class CouponApi
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
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The gift card.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves the key and balance of a gift card by its code for the specified business.
     *
     * Validates the gift card code against the specified business, enforces a per-IP rate limit, and checks that
     * the
     * card is active, not already redeemed, not expired, and in the correct currency before returning its key and
     * remaining balance.
     *
     * @return array Parsed JSON response data.
     *   - string k_login_coupon: The gift card reference number for this specific user. WellnessLiving uses this reference number for managing
gift cards in the system.
     *   - string m_amount: The gift card amount.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Coupon/Coupon.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            's_code' => $this->s_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
