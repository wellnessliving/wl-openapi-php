<?php
namespace WlSdk\Wl\Catalog\StaffApp\CatalogView;

use WlSdk\WlSdkClient;

/**
 * Calculates price information about sale item.
 */
class CatalogViewApi
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
     * Configuration information about the item, which can specify prorated amounts.

If set, these values will change the values returned by the endpoint call.
     *
     * @var array[]|null
     */
    public ?array $a_config = null;

    /**
     * Contains information about edited taxes.

This will be `null` if not set yet or default taxes are used.

The key is the tax identifier, where the value is:
     *
     * @var array[]|null
     */
    public ?array $a_tax = null;

    /**
     * The quantity of items.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    /**
     * The ID of the sale category. One of the [RsSaleSid](#/components/schemas/RsSaleSid) constants.
     *
     * @var int|null
     */
    public ?int $id_sale = null;

    /**
     * The business key.
This will be `null` for the system business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the sale item.
This can be retrieved with the [CatalogListApi](/Wl/Catalog/StaffApp/CatalogList/CatalogList.json) endpoint (see the
`a_shop_product` parameter).
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The product option key.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * The custom price of the sale item.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The ID of the user who performed the actions.
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
     * Calculates price information about sale item.
     *
     * Used in the staff app checkout to show the real-time price of a single line item as the staff
     * member configures it (adjusting quantity, custom price, or proration). Returns the full tax
     * breakdown so the staff member sees exactly what the client will be charged.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_tax_data: No description.
     *   - string m_prorate: The prorated amount.
     *   - string m_subtotal: The amount of the sale item, excluding taxes.
     *   - string m_tax: The calculated amount of tax.
     *   - string m_total: The calculated amount of the sale item, including taxes.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Catalog/StaffApp/CatalogView/CatalogView.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_config' => $this->a_config,
            'a_tax' => $this->a_tax,
            'i_quantity' => $this->i_quantity,
            'id_sale' => $this->id_sale,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            'k_shop_product_option' => $this->k_shop_product_option,
            'm_price' => $this->m_price,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
