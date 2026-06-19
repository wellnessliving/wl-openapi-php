<?php
namespace WlSdk\Wl\Catalog\Cart;

use WlSdk\WlSdkClient;

/**
 * Gets purchase cost data.
 */
class CartApi
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
     * The list of items in the cart.
     *
     * @var array[]|null
     */
    public ?array $a_item = null;

    /**
     * Whether selected login prize should be auto applied to first applicable item.
     *
     * @var bool|null
     */
    public ?bool $is_auto_apply_prize = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The login prize key.
     *
     * @var string|null
     */
    public ?string $k_login_prize = null;

    /**
     * The discount code.

If `null`, the discount code has been reset.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    /**
     * The user key.

This will be `0` for guests.
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
     * Gets purchase cost data.
     *
     * Used in the client-facing checkout flow to show a live price summary before the client submits
     * payment. Calculates the full breakdown - subtotal, taxes, applied discounts, reward redemptions,
     * and tips - so the client can review the total before confirming.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_discount_item: The list of discounts for each item.

Keys refer to unique item keys, and values refer to discount amounts for the item.
     *   - array[] a_item: No description.
     *   - array[] a_prize_propose: No description.
     *   - array[] a_reward_item: No description.
     *   - array[] a_reward_propose: No description.
     *   - string[] a_tax_list: Values derived for individual tax rates.

Keys refer to tax keys, values refer to the amount of tax in the cart.
     *   - int i_score: Amount of client's reward points.
     *   - string m_discount: The full discount of the cart.

If `null`, the discount isn't calculated yet.
     *   - string m_discount_total: The total discount amount.
     *   - string m_subtotal: The total amount in the catalog cart without tax.

If `null`, the total amount isn't set yet.
     *   - string m_tax: The tax amount.

If `null`, the tax amount isn't set yet.
     *   - string m_tip_purchase: The amount of appointment tips.
     *   - string m_total: The total amount in the catalog cart.

If `null`, the total amount isn't set yet.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Catalog/Cart/Cart.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_item' => $this->a_item,
            'is_auto_apply_prize' => $this->is_auto_apply_prize,
            'k_location' => $this->k_location,
            'k_login_prize' => $this->k_login_prize,
            'text_discount_code' => $this->text_discount_code,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
