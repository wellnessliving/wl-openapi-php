<?php

namespace WlSdk\Wl\Appointment\Book\Purchase;

class PurchaseGetResponsePurchase
{
    /**
     * Information describing the logo of the purchase option. This value can be false if there is no logo
     * described.
     * Image information will have the following fields:
     *
     * @var PurchaseGetResponsePurchaseImage|null
     */
    public ?PurchaseGetResponsePurchaseImage $a_image = null;

    /**
     * The set of calculated values for payment:
     *
     * @var PurchaseGetResponsePurchasePayment|null
     */
    public ?PurchaseGetResponsePurchasePayment $a_payment = null;

    /**
     * A list of calendar restrictions of the Purchase Option in a human-readable format, for example: '4 per
     * week'.
     *
     * @var string[]|null
     */
    public ?array $a_visit_limit = null;

    /**
     * Date, when promotion expires.
     *
     * @var string|null
     */
    public ?string $dt_expire = null;

    /**
     * Date, when promotion starts.
     *
     * @var string|null
     */
    public ?string $dt_start = null;

    /**
     * The price of the Purchase Option.
     *
     * @var string|null
     */
    public ?string $f_price = null;

    /**
     * Order number of the purchase option in the list.
     *
     * @var int|null
     */
    public ?int $i = null;

    /**
     * Count of visits that purchase option allows to make.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Maximum number of minutes that current promotion can be used.
     *
     * @var int|null
     */
    public ?int $i_limit_duration = null;

    /**
     * Count of calendar periods (weeks, months, years) between payment for membership.
     *
     * @var int|null
     */
    public ?int $i_payment_period = null;

    /**
     * Duration ID. Constant from {@link \WlSdk\ADurationSid}.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_duration = null;

    /**
     * Program ID for promotions from {@link \WlSdk\RsProgramSid}.
     *
     * @var int|null
     * @see \WlSdk\RsProgramSid
     */
    public ?int $id_program = null;

    /**
     * Program type ID. Constant from {@link \WlSdk\RsProgramTypeSid}.
     *
     * @var int|null
     * @see \WlSdk\RsProgramTypeSid
     */
    public ?int $id_program_type = null;

    /**
     * How the Purchase Item price is specified. One of the {@link \WlSdk\RsProgramTypeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsProgramTypeSid
     */
    public ?int $id_promotion_price = null;

    /**
     * ID of the purchase item from {@link \WlSdk\RsPurchaseItemSid}
     *
     * @var int|null
     * @see \WlSdk\RsPurchaseItemSid
     */
    public ?int $id_purchase_item = null;

    /**
     * This will be `true` if the Purchase Option is a contract. It will `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_contract = null;

    /**
     * `true` if purchase option has description.
     *
     * @var bool|null
     */
    public ?bool $is_description = null;

    /**
     * `true` if promotion is introductory offer, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_introductory = null;

    /**
     * This will be `true` if the Purchase Option will auto-renew. It will be `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_renew = null;

    /**
     * Whether Purchase Option is renewable and the "auto-renew" option should be turned on by default.
     *
     * @var bool|null
     */
    public ?bool $is_renew_check = null;

    /**
     * This will be `true` if the Purchase Option has a duration that begins on purchase. It will be `false`
     * otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_start = null;

    /**
     * Primary ID of the element in it's table.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Price of single session purchase before online discount. `null` if service does not have online discount.
     * Is set only if this purchase option is purchase of single visit.
     *
     * @var string|null
     */
    public ?string $m_price_old = null;

    /**
     * Activation settings of the promotion.
     *
     * @var string|null
     */
    public ?string $s_activation = null;

    /**
     * Class for designer to mark purchase options with different icons.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * List of services included in the promotion.
     *
     * @var string|null
     */
    public ?string $s_class_include = null;

    /**
     * Description of the purchase option.
     *
     * @var string|null
     */
    public ?string $s_description = null;

    /**
     * Duration of the promotion.
     *
     * @var string|null
     */
    public ?string $s_duration = null;

    /**
     * Period between payments for memberships.
     *
     * @var string|null
     */
    public ?string $s_payment_duration = null;

    /**
     * Category of the program for promotions from {@link \WlSdk\RsProgramCategorySid}.
     *
     * @var string|null
     */
    public ?string $sid_program_category = null;

    /**
     * Name of the purchase option.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * Key of the purchase option in the format [`purchase_item_id`]::[`k_id`]
     *
     * @var string|null
     */
    public ?string $s_value = null;

    /**
     * If this promotion is a package. This field contains list of promotions contained in the package.
     *
     * @var string|null
     */
    public ?string $text_package_item = null;

    public function __construct(array $data)
    {
        $this->a_image = isset($data['a_image']) ? new PurchaseGetResponsePurchaseImage((array)$data['a_image']) : null;
        $this->a_payment = isset($data['a_payment']) ? new PurchaseGetResponsePurchasePayment((array)$data['a_payment']) : null;
        $this->a_visit_limit = isset($data['a_visit_limit']) ? (array)$data['a_visit_limit'] : null;
        $this->dt_expire = isset($data['dt_expire']) ? (string)$data['dt_expire'] : null;
        $this->dt_start = isset($data['dt_start']) ? (string)$data['dt_start'] : null;
        $this->f_price = isset($data['f_price']) ? (string)$data['f_price'] : null;
        $this->i = isset($data['i']) ? (int)$data['i'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_limit_duration = isset($data['i_limit_duration']) ? (int)$data['i_limit_duration'] : null;
        $this->i_payment_period = isset($data['i_payment_period']) ? (int)$data['i_payment_period'] : null;
        $this->id_duration = isset($data['id_duration']) ? (int)$data['id_duration'] : null;
        $this->id_program = isset($data['id_program']) ? (int)$data['id_program'] : null;
        $this->id_program_type = isset($data['id_program_type']) ? (int)$data['id_program_type'] : null;
        $this->id_promotion_price = isset($data['id_promotion_price']) ? (int)$data['id_promotion_price'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->is_contract = isset($data['is_contract']) ? (bool)$data['is_contract'] : null;
        $this->is_description = isset($data['is_description']) ? (bool)$data['is_description'] : null;
        $this->is_introductory = isset($data['is_introductory']) ? (bool)$data['is_introductory'] : null;
        $this->is_renew = isset($data['is_renew']) ? (bool)$data['is_renew'] : null;
        $this->is_renew_check = isset($data['is_renew_check']) ? (bool)$data['is_renew_check'] : null;
        $this->is_start = isset($data['is_start']) ? (bool)$data['is_start'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->m_price_old = isset($data['m_price_old']) ? (string)$data['m_price_old'] : null;
        $this->s_activation = isset($data['s_activation']) ? (string)$data['s_activation'] : null;
        $this->s_class = isset($data['s_class']) ? (string)$data['s_class'] : null;
        $this->s_class_include = isset($data['s_class_include']) ? (string)$data['s_class_include'] : null;
        $this->s_description = isset($data['s_description']) ? (string)$data['s_description'] : null;
        $this->s_duration = isset($data['s_duration']) ? (string)$data['s_duration'] : null;
        $this->s_payment_duration = isset($data['s_payment_duration']) ? (string)$data['s_payment_duration'] : null;
        $this->sid_program_category = isset($data['sid_program_category']) ? (string)$data['sid_program_category'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->s_value = isset($data['s_value']) ? (string)$data['s_value'] : null;
        $this->text_package_item = isset($data['text_package_item']) ? (string)$data['text_package_item'] : null;
    }
}
