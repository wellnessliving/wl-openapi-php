<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogList;

class CatalogListGetResponseShopProduct
{
    /**
     * The list of location keys where the current sale item is available.
     * Each value is a location key.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * The list of login types available to purchase the sale item.
     * Empty list means that the sale item is available to all login types.
     *
     * @var string[]|null
     */
    public ?array $a_login_type = null;

    /**
     * The list of member groups available to purchase the sale item.
     *
     * Empty list means that the sale item is available to all member groups.
     *
     * @var string[]|null
     */
    public ?array $a_member_group = null;

    /**
     * A list of online store category keys.
     *
     * @var string[]|null
     */
    public ?array $a_shop_category = null;

    /**
     * The program ID, set for promotions. One of the {@link \WlSdk\RsProgramSid} constants.
     *  <p>If `id_program` is {@link \WlSdk\RsProgramSid}, then use:</p>
     *  <ul>
     *    <li>[ProgramListApi](/Wl/Insurance/Catalog/ProgramList.json) to obtain a list of active programs.</li>
     *    <li>[EnrollmentFieldListApi](/Wl/Insurance/Enrollment/Field/EnrollmentFieldList.json) to get and validate
     * fields for a given program.</li>
     *    <li>[PaymentApi](/Wl/Catalog/Payment/Payment.json) for a program purchase.</li>
     *  </ul>
     *
     * @var int|null
     * @see \WlSdk\RsProgramSid
     */
    public ?int $id_program = null;

    /**
     * The restriction ID. One of the {@link \WlSdk\Wl\Shop\Product\PurchaseRestrictionSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Shop\Product\PurchaseRestrictionSid
     */
    public ?int $id_restriction = null;

    /**
     * The sale category ID. One of the {@link \WlSdk\RsSaleSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsSaleSid
     */
    public ?int $id_sale = null;

    /**
     * Determines whether the sale item can be purchased by the client.
     *
     * @var bool|null
     */
    public ?bool $is_online_sell = null;

    /**
     * This will be `true` if this Purchase Option is suitable to pay for the visit
     * [CatalogListApi::$k_visit](/Wl/Catalog/StaffApp/CatalogList/CatalogList.json).
     * Otherwise, this will be `false`.
     * If [CatalogListApi::$k_visit](/Wl/Catalog/StaffApp/CatalogList/CatalogList.json) is empty, this will always
     * be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_visit = null;

    /**
     * The sale item ID.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The category title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Direct link to catalog view page of this purchase item.
     *
     * @var string|null
     */
    public ?string $url_catalog = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? (array)$data['a_location'] : null;
        $this->a_login_type = isset($data['a_login_type']) ? (array)$data['a_login_type'] : null;
        $this->a_member_group = isset($data['a_member_group']) ? (array)$data['a_member_group'] : null;
        $this->a_shop_category = isset($data['a_shop_category']) ? (array)$data['a_shop_category'] : null;
        $this->id_program = isset($data['id_program']) ? (int)$data['id_program'] : null;
        $this->id_restriction = isset($data['id_restriction']) ? (int)$data['id_restriction'] : null;
        $this->id_sale = isset($data['id_sale']) ? (int)$data['id_sale'] : null;
        $this->is_online_sell = isset($data['is_online_sell']) ? (bool)$data['is_online_sell'] : null;
        $this->is_visit = isset($data['is_visit']) ? (bool)$data['is_visit'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_catalog = isset($data['url_catalog']) ? (string)$data['url_catalog'] : null;
    }
}
