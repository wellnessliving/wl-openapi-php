<?php
namespace WlSdk\Wl\Catalog\CatalogList;

/**
 * Response from GET
 */
class ElementApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_age_restriction = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_data = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_image = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_image_list = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_installment_template = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_item = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_tax = null;

    /**
     * The price of the sale item.
     *
     * @var string|null
     */
    public ?string $f_price = null;

    /**
     * The price of the sale item, including tax.
     *
     * @var string|null
     */
    public ?string $f_price_include = null;

    /**
     * The retail price of the product. This will be empty if this isn't a product.
     *
     * @var string|null
     */
    public ?string $f_price_retail_product = null;

    /**
     * Full price of event. This will be empty if this isn't an event.
     *
     * @var string|null
     */
    public ?string $f_price_total_enrollment = null;

    /**
     * The tax amount.
     *
     * @var string|null
     */
    public ?string $f_tax = null;

    /**
     * The sale item description.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Special instructions for the sale item.
     *
     * @var string|null
     */
    public ?string $html_special = null;

    /**
     * The purchase item category ID.
     * One of the [RsPurchaseItemSid](#/components/schemas/RsPurchaseItemSid) constants.
     *
     * @var int|null
     */
    public ?int $id_purchase_item = null;

    /**
     * The ID of the item view category. One of the
     * [PurchaseOptionViewSid](#/components/schemas/Wl.Catalog.PurchaseOptionViewSid) constants.
     *
     * @var int|null
     */
    public ?int $id_purchase_option_view = null;

    /**
     * The ID of item category.
     * One of the [RsSaleSid](#/components/schemas/RsSaleSid) constants.
     *
     * @var int|null
     */
    public ?int $id_sale = null;

    /**
     * If `true`, the item requires a contract. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_contract = null;

    /**
     * The item key.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The product option key.
     * 
     * This will be `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * The discount amount for a discount code.
     *
     * @var string|null
     */
    public ?string $m_discount_code = null;

    /**
     * The discount amount for a user's type.
     *
     * @var string|null
     */
    public ?string $m_discount_login = null;

    /**
     * The price on the price tag.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The price, including taxes.
     *
     * @var string|null
     */
    public ?string $m_price_include = null;

    /**
     * The tax amount.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    /**
     * Additional comment(s).
     * For example, information about 'introductory offer'.
     *
     * @var string|null
     */
    public ?string $s_comment = null;

    /**
     * The price of the sale item in a human-readable format.
     *
     * @var string|null
     */
    public ?string $s_price = null;

    /**
     * The category title of the sale item.
     *
     * @var string|null
     */
    public ?string $s_sale = null;

    /**
     * The sale item title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * The price on the price tag, with the currency sign.
     *
     * @var string|null
     */
    public ?string $text_price = null;

    /**
     * The title of the item category.
     *
     * @var string|null
     */
    public ?string $text_sale = null;

    /**
     * The item title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * A detailed description.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    /**
     * Special instructions.
     *
     * @var string|null
     */
    public ?string $xml_special = null;

    public function __construct(array $data)
    {
        $this->a_age_restriction = isset($data['a_age_restriction']) ? (array)$data['a_age_restriction'] : null;
        $this->a_data = isset($data['a_data']) ? (array)$data['a_data'] : null;
        $this->a_image = isset($data['a_image']) ? (array)$data['a_image'] : null;
        $this->a_image_list = isset($data['a_image_list']) ? (array)$data['a_image_list'] : null;
        $this->a_installment_template = isset($data['a_installment_template']) ? (array)$data['a_installment_template'] : null;
        $this->a_item = isset($data['a_item']) ? (array)$data['a_item'] : null;
        $this->a_tax = isset($data['a_tax']) ? (array)$data['a_tax'] : null;
        $this->f_price = isset($data['f_price']) ? (string)$data['f_price'] : null;
        $this->f_price_include = isset($data['f_price_include']) ? (string)$data['f_price_include'] : null;
        $this->f_price_retail_product = isset($data['f_price_retail_product']) ? (string)$data['f_price_retail_product'] : null;
        $this->f_price_total_enrollment = isset($data['f_price_total_enrollment']) ? (string)$data['f_price_total_enrollment'] : null;
        $this->f_tax = isset($data['f_tax']) ? (string)$data['f_tax'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->html_special = isset($data['html_special']) ? (string)$data['html_special'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->id_purchase_option_view = isset($data['id_purchase_option_view']) ? (int)$data['id_purchase_option_view'] : null;
        $this->id_sale = isset($data['id_sale']) ? (int)$data['id_sale'] : null;
        $this->is_contract = isset($data['is_contract']) ? (bool)$data['is_contract'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->k_shop_product_option = isset($data['k_shop_product_option']) ? (string)$data['k_shop_product_option'] : null;
        $this->m_discount_code = isset($data['m_discount_code']) ? (string)$data['m_discount_code'] : null;
        $this->m_discount_login = isset($data['m_discount_login']) ? (string)$data['m_discount_login'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->m_price_include = isset($data['m_price_include']) ? (string)$data['m_price_include'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->s_comment = isset($data['s_comment']) ? (string)$data['s_comment'] : null;
        $this->s_price = isset($data['s_price']) ? (string)$data['s_price'] : null;
        $this->s_sale = isset($data['s_sale']) ? (string)$data['s_sale'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->text_price = isset($data['text_price']) ? (string)$data['text_price'] : null;
        $this->text_sale = isset($data['text_sale']) ? (string)$data['text_sale'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
        $this->xml_special = isset($data['xml_special']) ? (string)$data['xml_special'] : null;
    }
}
