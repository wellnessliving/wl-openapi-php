<?php

namespace WlSdk\Wl\Promotion;

class PromotionGetResponsePromotion
{
    /**
     * Information about services that can be attended with this pass or membership.
     *
     * @var PromotionGetResponsePromotionAccess|null
     */
    public ?PromotionGetResponsePromotionAccess $a_access = null;

    /**
     * Information about Purchase Option image.
     * This will be an empty array if the Purchase Option doesn't have an image.
     *
     * @var PromotionGetResponsePromotionImage|null
     */
    public ?PromotionGetResponsePromotionImage $a_image = null;

    /**
     * A list of locations where this promotion is available.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * A list of login types linked with this promotion.
     *
     * @var string[]|null
     */
    public ?array $a_login_type = null;

    /**
     * A list of login types linked with this promotion.
     *
     * @var string[]|null
     */
    public ?array $a_member_group = null;

    /**
     * List of selected tags.
     *
     * @var string[]|null
     */
    public ?array $a_tag = null;

    /**
     * The local expiration date. This is the last day when the Purchase Option is active.
     *  This is used only when the 'Expires on a certain date' duration type is set.
     *
     * @var string|null
     */
    public ?string $dl_expire = null;

    /**
     * Date when promotion should be terminated. `null` if there is no terminate date.
     *
     * @var string|null
     */
    public ?string $dl_terminate = null;

    /**
     * Approximate revenue per session value.
     *
     * @var string|null
     */
    public ?string $f_revenue_single = null;

    /**
     * The number of periods for the 'Period' duration type.
     * For example, if the duration of the Purchase Option is 12 months, this field will be 12.
     *
     * @var int|null
     */
    public ?int $i_duration = null;

    /**
     * The number of visits that the owner can use for the Purchase Option.
     * This will be `0` if the Purchase Option allows for unlimited visits.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The type of period for the 'Period' duration type.
     * For example, if the duration of the Purchase Option is 12 months, this field will display the ID of the
     * month.
     * For all possible options, see {@link \WlSdk\ADurationSid}.
     *
     * @var int|null
     */
    public ?int $id_duration = null;

    /**
     * The duration type. Possible duration types can be 'Without End', 'Expires on a certain date', 'Period'.
     * For more information, see {@link \WlSdk\RsDurationTypeSid}.
     *
     * @var int|null
     */
    public ?int $id_duration_type = null;

    /**
     * The Purchase Option type.
     * For more information, see {@link \WlSdk\RsProgramSid}.
     *
     * @var int|null
     */
    public ?int $id_program = null;

    /**
     * Purchase restriction for this product, one of {@link \WlSdk\Wl\Promotion\PurchaseRestrictionSid} constants.
     *
     * @var int|null
     */
    public ?int $id_restriction = null;

    /**
     * Whether this promotion is active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Whether this promotion is available for all locations of the business.
     *
     * @var bool|null
     */
    public ?bool $is_business_wide = null;

    /**
     * If `true`, this promotion is for introductory clients. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_introductory = null;

    /**
     * If `true`, this promotion is available for online purchase. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_online = null;

    /**
     * Whether clients who purchase this item excluded from payroll calculations.
     *
     * @var bool|null
     */
    public ?bool $is_payroll = null;

    /**
     * If `true` need to add approximate revenue per session value.
     *
     * @var bool|null
     */
    public ?bool $is_revenue_single = null;

    /**
     * Whether promotion can be used for booking. `null` if there is no termination.
     *
     * @var bool|null
     */
    public ?bool $is_use = null;

    /**
     * The key of the promotion.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * Primary tag.
     *
     * @var string|null
     */
    public ?string $k_tag_primary = null;

    /**
     * The price.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The description of the Purchase Option.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * The title of the Purchase Option.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * The direct URL to the promotion purchase page.
     *
     * @var string|null
     */
    public ?string $url_buy = null;

    /**
     * The direct URL to the promotion details page in the online store.
     *
     * @var string|null
     */
    public ?string $url_catalog = null;

    public function __construct(array $data)
    {
        $this->a_access = isset($data['a_access']) ? new PromotionGetResponsePromotionAccess((array)$data['a_access']) : null;
        $this->a_image = isset($data['a_image']) ? new PromotionGetResponsePromotionImage((array)$data['a_image']) : null;
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->a_login_type = isset($data['a_login_type']) ? (array)$data['a_login_type'] : null;
        $this->a_member_group = isset($data['a_member_group']) ? (array)$data['a_member_group'] : null;
        $this->a_tag = isset($data['a_tag']) ? (array)$data['a_tag'] : null;
        $this->dl_expire = isset($data['dl_expire']) ? (string)$data['dl_expire'] : null;
        $this->dl_terminate = isset($data['dl_terminate']) ? (string)$data['dl_terminate'] : null;
        $this->f_revenue_single = isset($data['f_revenue_single']) ? (string)$data['f_revenue_single'] : null;
        $this->i_duration = isset($data['i_duration']) ? (int)$data['i_duration'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->id_duration = isset($data['id_duration']) ? (int)$data['id_duration'] : null;
        $this->id_duration_type = isset($data['id_duration_type']) ? (int)$data['id_duration_type'] : null;
        $this->id_program = isset($data['id_program']) ? (int)$data['id_program'] : null;
        $this->id_restriction = isset($data['id_restriction']) ? (int)$data['id_restriction'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_business_wide = isset($data['is_business_wide']) ? (bool)$data['is_business_wide'] : null;
        $this->is_introductory = isset($data['is_introductory']) ? (bool)$data['is_introductory'] : null;
        $this->is_online = isset($data['is_online']) ? (bool)$data['is_online'] : null;
        $this->is_payroll = isset($data['is_payroll']) ? (bool)$data['is_payroll'] : null;
        $this->is_revenue_single = isset($data['is_revenue_single']) ? (bool)$data['is_revenue_single'] : null;
        $this->is_use = isset($data['is_use']) ? (bool)$data['is_use'] : null;
        $this->k_promotion = isset($data['k_promotion']) ? (string)$data['k_promotion'] : null;
        $this->k_tag_primary = isset($data['k_tag_primary']) ? (string)$data['k_tag_primary'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_buy = isset($data['url_buy']) ? (string)$data['url_buy'] : null;
        $this->url_catalog = isset($data['url_catalog']) ? (string)$data['url_catalog'] : null;
    }
}
