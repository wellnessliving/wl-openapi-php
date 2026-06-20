<?php

namespace WlSdk\Wl\Discount\Code\Edit;

/**
 * Response from GET
 */
class DiscountCodeEditGetResponse
{
    /**
     * No description.
     *
     * @var DiscountCodeEditGetResponseComponent[]|null
     */
    public ?array $a_component = null;

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
     * @var int|null
     */
    public ?int $id_duration = null;

    /**
     * Type of the discount code duration from {@link \WlSdk\RsDurationTypeSid}.
     *
     * @var int|null
     */
    public ?int $id_duration_type = null;

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

    public function __construct(array $data)
    {
        $this->a_component = isset($data['a_component']) ? array_map(static fn ($item) => new DiscountCodeEditGetResponseComponent((array)$item), (array)$data['a_component']) : null;
        $this->a_login_type = isset($data['a_login_type']) ? (array)$data['a_login_type'] : null;
        $this->a_member_group = isset($data['a_member_group']) ? (array)$data['a_member_group'] : null;
        $this->dl_end = isset($data['dl_end']) ? (string)$data['dl_end'] : null;
        $this->dl_start = isset($data['dl_start']) ? (string)$data['dl_start'] : null;
        $this->f_value = isset($data['f_value']) ? (string)$data['f_value'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->id_duration = isset($data['id_duration']) ? (int)$data['id_duration'] : null;
        $this->id_duration_type = isset($data['id_duration_type']) ? (int)$data['id_duration_type'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_auto_renew = isset($data['is_auto_renew']) ? (bool)$data['is_auto_renew'] : null;
        $this->is_coupon = isset($data['is_coupon']) ? (bool)$data['is_coupon'] : null;
        $this->is_first_payment = isset($data['is_first_payment']) ? (bool)$data['is_first_payment'] : null;
        $this->is_login_type = isset($data['is_login_type']) ? (bool)$data['is_login_type'] : null;
        $this->is_online = isset($data['is_online']) ? (bool)$data['is_online'] : null;
        $this->is_percent = isset($data['is_percent']) ? (bool)$data['is_percent'] : null;
        $this->is_purchase_all = isset($data['is_purchase_all']) ? (bool)$data['is_purchase_all'] : null;
        $this->s_component = isset($data['s_component']) ? (string)$data['s_component'] : null;
        $this->text_code = isset($data['text_code']) ? (string)$data['text_code'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
