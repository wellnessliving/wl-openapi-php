<?php
namespace WlSdk\Wl\Catalog\CatalogList;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of all sale items.
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
     * Arguments from direct purchase link, which can give additional access to products, which are available
  only by such link.
     *
     * @var array[]|null
     */
    public ?array $a_direct_link = null;

    /**
     * `true` to consider the requirement to have a credit card for booking
(this requirement can be set in business settings)
`false` to ignore it.
     *
     * @var bool|null
     */
    public ?bool $is_credit_card_check = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of a location. If `0`, all products in the business are retrieved.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of user.
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
     * Retrieves a list of all sale items.
     *
     * Used to render the full client-facing store catalog for a business. Returns all purchasable items -
     * promotions, products, events, and coupons - merged across the business's categories. The separate
     * de-duplicated list and category list support both the flat and category-tabbed views.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_product: No description.
     *   - array[] a_product_duplicate: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Catalog/CatalogList/List.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_direct_link' => $this->a_direct_link,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
