<?php
namespace WlSdk\Wl\Appointment\Book\Purchase;

class Purchase72GetResponseLoginPromotion
{
    /**
     * Information about the Purchase Option. It contains the following information:
     *
     * @var Purchase72GetResponseLoginPromotionLoginPromotionInfo|null
     */
    public ?Purchase72GetResponseLoginPromotionLoginPromotionInfo $a_login_promotion_info = null;

    /**
     * The list of calendar restrictions of the Purchase Option. For example, four per week.
     *
     * @var string[]|null
     */
    public ?array $a_visit_limit = null;

    /**
     * Data about the shortest restriction period:
     *
     * @var Purchase72GetResponseLoginPromotionRestrict|null
     */
    public ?Purchase72GetResponseLoginPromotionRestrict $a_restrict = null;

    /**
     * Data about all restriction periods. Given as an array, where each record has the following structure:
     *
     * @var Purchase72GetResponseLoginPromotionRestrictData|null
     */
    public ?Purchase72GetResponseLoginPromotionRestrictData $a_restrict_data = null;

    /**
     * The count of visits that the Purchase Option allows the client to make.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The maximum number of minutes that current Purchase Option can be used for.
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
     * The program ID for promotions. One of the {@link \WlSdk\RsProgramSid} constants.
     *
     * @var \WlSdk\RsProgramSid|null
     */
    public ?\WlSdk\RsProgramSid $id_program = null;

    /**
     * `true` if this purchase option is shared from another user.
     * `false` if this purchase option belongs to the user for whom the request is made.
     *
     * @var bool|null
     */
    public ?bool $is_share = null;

    /**
     * The Purchase Option login key.
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
     * The Purchase Option name.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * If this Purchase Option is a package, then this field contains a list of Purchase Options contained in the
     * package.
     *
     * @var string|null
     */
    public ?string $text_package_item = null;

    /**
     * The user key of the owner of the promotion.
     * Will be different from the user for whom the request is made if the promotion is shared.
     *
     * @var string|null
     */
    public ?string $uid_owner = null;

    public function __construct(array $data)
    {
        $this->a_login_promotion_info = isset($data['a_login_promotion_info']) ? new Purchase72GetResponseLoginPromotionLoginPromotionInfo((array)$data['a_login_promotion_info']) : null;
        $this->a_visit_limit = isset($data['a_visit_limit']) ? (array)$data['a_visit_limit'] : null;
        $this->a_restrict = isset($data['a_restrict']) ? new Purchase72GetResponseLoginPromotionRestrict((array)$data['a_restrict']) : null;
        $this->a_restrict_data = isset($data['a_restrict_data']) ? new Purchase72GetResponseLoginPromotionRestrictData((array)$data['a_restrict_data']) : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_limit_duration = isset($data['i_limit_duration']) ? (int)$data['i_limit_duration'] : null;
        $this->i_promotion_priority = isset($data['i_promotion_priority']) ? (int)$data['i_promotion_priority'] : null;
        $this->id_program = isset($data['id_program']) ? \WlSdk\RsProgramSid::tryFrom((int)$data['id_program']) : null;
        $this->is_share = isset($data['is_share']) ? (bool)$data['is_share'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->s_class_include = isset($data['s_class_include']) ? (string)$data['s_class_include'] : null;
        $this->s_description = isset($data['s_description']) ? (string)$data['s_description'] : null;
        $this->s_duration = isset($data['s_duration']) ? (string)$data['s_duration'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_package_item = isset($data['text_package_item']) ? (string)$data['text_package_item'] : null;
        $this->uid_owner = isset($data['uid_owner']) ? (string)$data['uid_owner'] : null;
    }
}
