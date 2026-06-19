<?php
namespace WlSdk\Wl\Discount\Code\Edit;

use WlSdk\WlSdkClient;

/**
 * Gets information about discount.
 */
class DiscountCodeEditApi
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
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the discount code. Empty, if this is creation of a new code.
     *
     * @var string|null
     */
    public ?string $k_discount_code = null;

    /**
     * List of client types.
     *
     * @var string[]|null
     */
    public ?array $a_login_type = null;

    /**
     * List of client groups.
     *
     * @var string[]|null
     */
    public ?array $a_member_group = null;

    /**
     * Expiration date. `null` if discount code is never expires.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Activation date.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Value of the percentage or fixed discount.
     *
     * @var string|null
     */
    public ?string $f_value = null;

    /**
     * Count of calendar periods from `id_duration` before expiration.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * Maximum count of usage. Zero means unlimited usage.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Calendar periods for discount code duration from [ADurationSid](#/components/schemas/ADurationSid). Zero if discount code is never expires.
     *
     * @var int|null
     */
    public ?int $id_duration = null;

    /**
     * Type of the discount code duration from [RsDurationTypeSid](#/components/schemas/RsDurationTypeSid).
     *
     * @var int|null
     */
    public ?int $id_duration_type = null;

    /**
     * `true` means discount code is active.
`false` means discount code is inactive.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * `true` means membership will auto-renew at discounted rate.
`false` means membership will auto-renew at full rate.
     *
     * @var bool|null
     */
    public ?bool $is_auto_renew = null;

    /**
     * `true` means discount code can reduce price of the gift cards.
`false` means discount code cannot reduce price of the gift cards.

If `is_purchase_all` is `true` this fields does not matter.
     *
     * @var bool|null
     */
    public ?bool $is_coupon = null;

    /**
     * `true` means discount code can be applied to first membership payment only.
`false` means discount code can be applied to all membership payments.
     *
     * @var bool|null
     */
    public ?bool $is_first_payment = null;

    /**
     * `true` means that only selected client types or groups can use this discount code.
`false` means that all client types and groups can use this discount code.
     *
     * @var bool|null
     */
    public ?bool $is_login_type = null;

    /**
     * `true` if clients can use this discount code in online store,
`false` if discount code can be used only in point of sale.
     *
     * @var bool|null
     */
    public ?bool $is_online = null;

    /**
     * `true` means discount value is percent from the purchase amount.
`false` means discount value is fixed sum from the purchase amount.
     *
     * @var bool|null
     */
    public ?bool $is_percent = null;

    /**
     * `true` means discount can be applied to all products and purchase options.
`false` means discount can be applied only to the selected product and purchase options.
     *
     * @var bool|null
     */
    public ?bool $is_purchase_all = null;

    /**
     * List of product and purchase options that are effected with this discount code.
Each element has the next format: `id_purchase_item`:`k_id`, where `id_purchase_item` -
one of [RsPurchaseItemSid](#/components/schemas/RsPurchaseItemSid), `k_id` is key of certain purchase item.
     *
     * @var string|null
     */
    public ?string $s_component = null;

    /**
     * Discount code that can be used during purchase.
     *
     * @var string|null
     */
    public ?string $text_code = null;

    /**
     * Description of the discount code.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Name of the discount code.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about discount.
     *
     * Used to load the discount code editor form. Returns the full configuration of an existing discount
     * code so the staff member can review or modify it: value, date range, usage limit, which items it
     * applies to, client type restrictions, and whether it is currently active.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_component: No description.
     *   - string[] a_login_type: List of client types.
     *   - string[] a_member_group: List of client groups.
     *   - string dl_end: Expiration date. `null` if discount code is never expires.
     *   - string dl_start: Activation date.
     *   - string f_value: Value of the percentage or fixed discount.
     *   - int i_duration: Count of calendar periods from `id_duration` before expiration.
     *   - int i_limit: Maximum count of usage. Zero means unlimited usage.
     *   - int id_duration: Calendar periods for discount code duration from [ADurationSid](#/components/schemas/ADurationSid). Zero if discount code is never expires.
     *   - int id_duration_type: Type of the discount code duration from [RsDurationTypeSid](#/components/schemas/RsDurationTypeSid).
     *   - bool is_active: `true` means discount code is active.
`false` means discount code is inactive.
     *   - bool is_auto_renew: `true` means membership will auto-renew at discounted rate.
`false` means membership will auto-renew at full rate.
     *   - bool is_coupon: `true` means discount code can reduce price of the gift cards.
`false` means discount code cannot reduce price of the gift cards.

If `is_purchase_all` is `true` this fields does not matter.
     *   - bool is_first_payment: `true` means discount code can be applied to first membership payment only.
`false` means discount code can be applied to all membership payments.
     *   - bool is_login_type: `true` means that only selected client types or groups can use this discount code.
`false` means that all client types and groups can use this discount code.
     *   - bool is_online: `true` if clients can use this discount code in online store,
`false` if discount code can be used only in point of sale.
     *   - bool is_percent: `true` means discount value is percent from the purchase amount.
`false` means discount value is fixed sum from the purchase amount.
     *   - bool is_purchase_all: `true` means discount can be applied to all products and purchase options.
`false` means discount can be applied only to the selected product and purchase options.
     *   - string s_component: List of product and purchase options that are effected with this discount code.
Each element has the next format: `id_purchase_item`:`k_id`, where `id_purchase_item` -
one of [RsPurchaseItemSid](#/components/schemas/RsPurchaseItemSid), `k_id` is key of certain purchase item.
     *   - string text_code: Discount code that can be used during purchase.
     *   - string text_description: Description of the discount code.
     *   - string text_title: Name of the discount code.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Discount/Code/Edit/DiscountCodeEdit.json', $this->params(), 'GET');
    }

    /**
     * Saves information about discount code or create new.
     *
     * Used to create a new discount code or update an existing one from the backend editor. Pass no
     * discount code key to create; pass an existing key to update. Returns the key of the saved code.
     *
     * @return array Parsed JSON response data.
     *   - string k_discount_code: Key of the discount code. Empty, if this is creation of a new code.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Discount/Code/Edit/DiscountCodeEdit.json', $this->params(), 'POST');
    }

    /**
     * Duplicates an existing discount code.
     *
     * Used in the backend when a staff member wants to create a similar discount code without re-entering
     * all settings manually. Creates an exact copy with a new unique code string.
     *
     * @return array Parsed JSON response data.
     *   - string k_discount_code: Key of the discount code. Empty, if this is creation of a new code.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Discount/Code/Edit/DiscountCodeEdit.json', $this->params(), 'PUT');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_discount_code' => $this->k_discount_code,
            'a_login_type' => $this->a_login_type,
            'a_member_group' => $this->a_member_group,
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'f_value' => $this->f_value,
            'i_duration' => $this->i_duration,
            'i_limit' => $this->i_limit,
            'id_duration' => $this->id_duration,
            'id_duration_type' => $this->id_duration_type,
            'is_active' => $this->is_active,
            'is_auto_renew' => $this->is_auto_renew,
            'is_coupon' => $this->is_coupon,
            'is_first_payment' => $this->is_first_payment,
            'is_login_type' => $this->is_login_type,
            'is_online' => $this->is_online,
            'is_percent' => $this->is_percent,
            'is_purchase_all' => $this->is_purchase_all,
            's_component' => $this->s_component,
            'text_code' => $this->text_code,
            'text_description' => $this->text_description,
            'text_title' => $this->text_title,
            ],
            static fn($v) => $v !== null
        );
    }
}
