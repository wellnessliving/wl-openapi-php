<?php
namespace WlSdk\Wl\Login\Product;

use WlSdk\WlSdkClient;

/**
 * Returns information about products purchased by client.
 */
class ProductApi
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
     * Maximal date and time of purchase in UTC. Empty string means no filter by maximal date.
     *
     * @var string|null
     */
    public ?string $dtu_end = null;

    /**
     * Minimal date and time of purchase in UTC. Empty string means no filter by minimal date.
     *
     * @var string|null
     */
    public ?string $dtu_start = null;

    /**
     * Number of the page to get.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * Page size.
     *
     * @var int|null
     */
    public ?int $i_page_size = null;

    /**
     * ID of the payment method. One of the [RsPayMethodSid](#/components/schemas/RsPayMethodSid) constants. Zero means no filter by payment method.
     *
     * @var int|null
     */
    public ?int $id_pay_method = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key. Empty string means no filter by location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Product option key. Empty string means no filter by product option.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * Maximum price of the product. 0 means no filter by maximum price.
     *
     * @var string|null
     */
    public ?string $m_price_max = null;

    /**
     * Minimum price of the product.
     *
     * @var string|null
     */
    public ?string $m_price_min = null;

    /**
     * User key. Empty string means return products purchased by walk-in.
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
     * Returns information about products purchased by client.
     *
     * Accepts filters for business, user, location, payment method, product option, price range, and date range,
     * then returns a paginated list of product purchases with quantity, unit price, total amount, product name,
     * and
     * purchase location.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_login_product: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Product/Product.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dtu_end' => $this->dtu_end,
            'dtu_start' => $this->dtu_start,
            'i_page' => $this->i_page,
            'i_page_size' => $this->i_page_size,
            'id_pay_method' => $this->id_pay_method,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_shop_product_option' => $this->k_shop_product_option,
            'm_price_max' => $this->m_price_max,
            'm_price_min' => $this->m_price_min,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
