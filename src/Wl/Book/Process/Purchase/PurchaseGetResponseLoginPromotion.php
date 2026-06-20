<?php
namespace WlSdk\Wl\Book\Process\Purchase;

class PurchaseGetResponseLoginPromotion
{
    /**
     * Information about the Purchase Option with the following information:
     *
     * @var PurchaseGetResponseLoginPromotionLoginPromotionInfo|null
     */
    public ?PurchaseGetResponseLoginPromotionLoginPromotionInfo $a_login_promotion_info = null;

    /**
     * List of UIDs of users who share this promotion.
     * List of those passed in the `a_login_promotion_group` array.
     *
     * @var string[]|null
     */
    public ?array $a_uid_share = null;

    /**
     * The list of calendar restrictions of the promotion (for example, 4 per week).
     *
     * @var string[]|null
     */
    public ?array $a_visit_limit = null;

    /**
     * Data about the shortest restriction period:
     *
     * @var PurchaseGetResponseLoginPromotionRestrict|null
     */
    public ?PurchaseGetResponseLoginPromotionRestrict $a_restrict = null;

    /**
     * Data about all restriction periods given as an array, where each record has the following structure:
     *
     * @var PurchaseGetResponseLoginPromotionRestrictData|null
     */
    public ?PurchaseGetResponseLoginPromotionRestrictData $a_restrict_data = null;

    /**
     * The number of visits the Purchase Option allows the client to make.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The maximum number of minutes the Purchase Option can be used for.
     *
     * @var int|null
     */
    public ?int $i_limit_duration = null;

    /**
     * Priority of this promotion. Result of {@link \WlSdk\Wl\Promotion\Priority\PromotionPrioritySid} method.
     *
     * @var int|null
     */
    public ?int $i_promotion_priority = null;

    /**
     * The program ID for Purchase Options. One of the {@link \WlSdk\RsProgramSid} constants.
     *
     * @var \WlSdk\RsProgramSid|null
     */
    public ?\WlSdk\RsProgramSid $id_program = null;

    /**
     * If `true`, the promotion converts to another instance upon expiration. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_convert = null;

    /**
     * `true` if the promotion is shared with the client, `false` if the client is owner of the promotion.
     *
     * @var bool|null
     */
    public ?bool $is_shared = null;

    /**
     * The login promotion key.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * The list of services provided by this Purchase Option.
     *
     * @var string|null
     */
    public ?string $s_class_include = null;

    /**
     * The Purchase Option description.
     *
     * @var string|null
     */
    public ?string $s_description = null;

    /**
     * The Purchase Option duration.
     *
     * @var string|null
     */
    public ?string $s_duration = null;

    /**
     * This is only set if `is_convert` is `true`. The title to use for the new promotion instance upon
     * auto-renewal.
     *
     * @var string|null
     */
    public ?string $s_promotion_convert = null;

    /**
     * The Purchase Option name.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * If this promotion is a package, this field will contain a list of Purchase Options contained in the package.
     *
     * @var string|null
     */
    public ?string $text_package_item = null;

    public function __construct(array $data)
    {
        $this->a_login_promotion_info = isset($data['a_login_promotion_info']) ? new PurchaseGetResponseLoginPromotionLoginPromotionInfo((array)$data['a_login_promotion_info']) : null;
        $this->a_uid_share = isset($data['a_uid_share']) ? (array)$data['a_uid_share'] : null;
        $this->a_visit_limit = isset($data['a_visit_limit']) ? (array)$data['a_visit_limit'] : null;
        $this->a_restrict = isset($data['a_restrict']) ? new PurchaseGetResponseLoginPromotionRestrict((array)$data['a_restrict']) : null;
        $this->a_restrict_data = isset($data['a_restrict_data']) ? new PurchaseGetResponseLoginPromotionRestrictData((array)$data['a_restrict_data']) : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_limit_duration = isset($data['i_limit_duration']) ? (int)$data['i_limit_duration'] : null;
        $this->i_promotion_priority = isset($data['i_promotion_priority']) ? (int)$data['i_promotion_priority'] : null;
        $this->id_program = isset($data['id_program']) ? \WlSdk\RsProgramSid::tryFrom((int)$data['id_program']) : null;
        $this->is_convert = isset($data['is_convert']) ? (bool)$data['is_convert'] : null;
        $this->is_shared = isset($data['is_shared']) ? (bool)$data['is_shared'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->s_class_include = isset($data['s_class_include']) ? (string)$data['s_class_include'] : null;
        $this->s_description = isset($data['s_description']) ? (string)$data['s_description'] : null;
        $this->s_duration = isset($data['s_duration']) ? (string)$data['s_duration'] : null;
        $this->s_promotion_convert = isset($data['s_promotion_convert']) ? (string)$data['s_promotion_convert'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_package_item = isset($data['text_package_item']) ? (string)$data['text_package_item'] : null;
    }
}
