<?php
namespace WlSdk\Wl\Coupon\CouponList;

use WlSdk\WlSdkClient;

/**
 * Gets list of coupons.
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
     * Whether to return franchisee-created coupons (if business is franchisor).
`true` to include franchisee-created coupons.
     *
     * @var bool|null
     */
    public ?bool $is_franchise = null;

    /**
     * `true` to get only gift cards available for current user; `false` to get all gift cards.
     *
     * @var bool|null
     */
    public ?bool $is_frontend = null;

    /**
     * A flag to include disabled items in the query result
     *
     * @var bool|null
     */
    public ?bool $is_inactive_include = null;

    /**
     * The business key to retrieve a list of all the gift cards in a business.
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
     * Gets list of coupons.
     *
     * Used to populate the gift card picker in the store and booking flows. Returns all gift card types
     * offered by the business. In franchise mode, gift cards from all franchise locations are included.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_coupon: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Coupon/CouponList/List.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_franchise' => $this->is_franchise,
            'is_frontend' => $this->is_frontend,
            'is_inactive_include' => $this->is_inactive_include,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
