<?php
namespace WlSdk\Wl\Discount\Code\Edit;

class DiscountCodeEditPostRequest
{
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
     * Calendar periods for discount code duration from {@link \WlSdk\ADurationSid}. Zero if discount code is never
     * expires.
     *
     * @var \WlSdk\ADurationSid|null
     */
    public ?\WlSdk\ADurationSid $id_duration = null;

    /**
     * Type of the discount code duration from {@link \WlSdk\RsDurationTypeSid}.
     *
     * @var \WlSdk\RsDurationTypeSid|null
     */
    public ?\WlSdk\RsDurationTypeSid $id_duration_type = null;

    /**
     * `true` means discount code is active.
     * `false` means discount code is inactive.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * `true` means membership will auto-renew at discounted rate.
     * `false` means membership will auto-renew at full rate.
     *
     * @var bool|null
     */
    public ?bool $is_auto_renew = null;

    /**
     * `true` means discount code can reduce price of the gift cards.
     * `false` means discount code cannot reduce price of the gift cards.
     * 
     * If `is_purchase_all` is `true` this fields does not matter.
     *
     * @var bool|null
     */
    public ?bool $is_coupon = null;

    /**
     * `true` means discount code can be applied to first membership payment only.
     * `false` means discount code can be applied to all membership payments.
     *
     * @var bool|null
     */
    public ?bool $is_first_payment = null;

    /**
     * `true` means that only selected client types or groups can use this discount code.
     * `false` means that all client types and groups can use this discount code.
     *
     * @var bool|null
     */
    public ?bool $is_login_type = null;

    /**
     * `true` if clients can use this discount code in online store,
     * `false` if discount code can be used only in point of sale.
     *
     * @var bool|null
     */
    public ?bool $is_online = null;

    /**
     * `true` means discount value is percent from the purchase amount.
     * `false` means discount value is fixed sum from the purchase amount.
     *
     * @var bool|null
     */
    public ?bool $is_percent = null;

    /**
     * `true` means discount can be applied to all products and purchase options.
     * `false` means discount can be applied only to the selected product and purchase options.
     *
     * @var bool|null
     */
    public ?bool $is_purchase_all = null;

    /**
     * List of product and purchase options that are effected with this discount code.
     * Each element has the next format: `id_purchase_item`:`k_id`, where `id_purchase_item` -
     * one of {@link \WlSdk\RsPurchaseItemSid}, `k_id` is key of certain purchase item.
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

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_discount_code' => $this->k_discount_code,
            'a_login_type' => $this->a_login_type,
            'a_member_group' => $this->a_member_group,
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'f_value' => $this->f_value,
            'i_duration' => $this->i_duration,
            'i_limit' => $this->i_limit,
            'id_duration' => $this->id_duration?->value,
            'id_duration_type' => $this->id_duration_type?->value,
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
