<?php
namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

use WlSdk\WlSdkClient;

/**
 * Calculates amount of cart.
 */
class CatalogCartApi
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
     * The list of cart items with the next structure:
     *
     * @var array[]|null
     */
    public ?array $a_item = null;

    /**
     * The discount as a percentage.
     *
     * @var float|null
     */
    public ?float $f_discount_percent = null;

    /**
     * If `true`, every item is checked at the cart. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_check_cart_item = null;

    /**
     * The business key.

This field isn't used directly, but described for correct JavaScript auto-generation.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The business location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The manual discount amount in dollars, excluding tax.
Staff members can set this amount when making a sale.
     *
     * @var string|null
     */
    public ?string $m_discount_flat = null;

    /**
     * The amount of tips.
     *
     * @var string|null
     */
    public ?string $m_tip = null;

    /**
     * The discount code.

This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    /**
     * The key of the current user.
     *
     * @var string|null
     */
    public ?string $uid_current = null;

    /**
     * The key of the user who performed the purchase.
     *
     * @var string|null
     */
    public ?string $uid_customer = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calculates amount of cart.
     *
     * Used in the staff app checkout flow to show a live price summary before the staff member processes
     * a client's payment. Returns the full breakdown so the staff member can confirm the total with
     * the client before charging.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_discount_code: No description.
     *   - bool is_commission: Determines whether the business applied a commission at checkout.
     *   - bool is_discount_code_mode_select: Determines, how staff sees discount codes in Store.
`true` as select field, `false` as input field.
     *   - bool is_receipt_note: Determines whether to display custom receipt notes at checkout.
     *   - string m_discount: The discount amount in dollars, excluding tax.
     *   - string m_discount_total: The discount amount applied to the cart's total amount, including taxes.
     *   - string m_subtotal: The subtotal amount.
     *   - string m_tax: The amount of tax.
     *   - string m_tip_purchase: The amount of appointment tips.
     *   - string m_total: The cart's total amount.
     *   - string text_error_code: The discount code's error code.

`null` if no error.
     *   - string text_error_message: The discount code's error message.

`null` if no error.
     *   - string text_receipt_note: The custom receipt note's text.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Catalog/StaffApp/CatalogCart/CatalogCart.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_item' => $this->a_item,
            'f_discount_percent' => $this->f_discount_percent,
            'is_check_cart_item' => $this->is_check_cart_item,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'm_discount_flat' => $this->m_discount_flat,
            'm_tip' => $this->m_tip,
            'text_discount_code' => $this->text_discount_code,
            'uid_current' => $this->uid_current,
            'uid_customer' => $this->uid_customer,
            ],
            static fn($v) => $v !== null
        );
    }
}
