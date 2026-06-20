<?php
namespace WlSdk\Wl\Catalog\CatalogList;

/**
 * Response from GET
 */
class ElementGetResponse
{
    /**
     * The age restriction configuration.
     * 
     * Age restrictions for an item apply when they're configured for a specific item and the API is requested from
     * the backend
     * or when age restriction are public.
     *
     * @var ElementGetResponseAgeRestriction|null
     */
    public ?ElementGetResponseAgeRestriction $a_age_restriction = null;

    /**
     * Additional information specific for the item.
     * 
     * The structure may be different depending on the item category.
     * 
     * 
     * Consider the following examples:
     * * For a product, this contains inventory information.
     * * For a gift card, this contains possible amounts.
     * * For a session pass/membership/package, this contains information about start and stop dates.
     *
     * @var ElementGetResponseData|null
     */
    public ?ElementGetResponseData $a_data = null;

    /**
     * Image information:
     *
     * @var ElementGetResponseImage|null
     */
    public ?ElementGetResponseImage $a_image = null;

    /**
     * List of images.
     * Keys are index and value is below information:
     *
     * @var ElementGetResponseImageList[]|null
     */
    public ?array $a_image_list = null;

    /**
     * A list of installment plans. Each element has the following next keys:
     *
     * @var ElementGetResponseInstallmentTemplate[]|null
     */
    public ?array $a_installment_template = null;

    /**
     * The list of information pertaining to the specified item.
     *
     * @var ElementGetResponseItem[]|null
     */
    public ?array $a_item = null;

    /**
     * A list of the item's taxes.
     * Keys refer tax keys, and values refer to the amount of tax.
     *
     * @var ElementGetResponseTax[]|null
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
     * One of the {@link \WlSdk\RsPurchaseItemSid} constants.
     *
     * @var \WlSdk\RsPurchaseItemSid|null
     */
    public ?\WlSdk\RsPurchaseItemSid $id_purchase_item = null;

    /**
     * The ID of the item view category. One of the {@link \WlSdk\Wl\Catalog\PurchaseOptionViewSid} constants.
     *
     * @var int|null
     */
    public ?int $id_purchase_option_view = null;

    /**
     * The ID of item category.
     * One of the {@link \WlSdk\RsSaleSid} constants.
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
        $this->a_age_restriction = isset($data['a_age_restriction']) ? new ElementGetResponseAgeRestriction((array)$data['a_age_restriction']) : null;
        $this->a_data = isset($data['a_data']) ? new ElementGetResponseData((array)$data['a_data']) : null;
        $this->a_image = isset($data['a_image']) ? new ElementGetResponseImage((array)$data['a_image']) : null;
        $this->a_image_list = isset($data['a_image_list']) ? array_map(static fn($item) => new ElementGetResponseImageList((array)$item), (array)$data['a_image_list']) : null;
        $this->a_installment_template = isset($data['a_installment_template']) ? array_map(static fn($item) => new ElementGetResponseInstallmentTemplate((array)$item), (array)$data['a_installment_template']) : null;
        $this->a_item = isset($data['a_item']) ? array_map(static fn($item) => new ElementGetResponseItem((array)$item), (array)$data['a_item']) : null;
        $this->a_tax = isset($data['a_tax']) ? array_map(static fn($item) => new ElementGetResponseTax((array)$item), (array)$data['a_tax']) : null;
        $this->f_price = isset($data['f_price']) ? (string)$data['f_price'] : null;
        $this->f_price_include = isset($data['f_price_include']) ? (string)$data['f_price_include'] : null;
        $this->f_price_retail_product = isset($data['f_price_retail_product']) ? (string)$data['f_price_retail_product'] : null;
        $this->f_price_total_enrollment = isset($data['f_price_total_enrollment']) ? (string)$data['f_price_total_enrollment'] : null;
        $this->f_tax = isset($data['f_tax']) ? (string)$data['f_tax'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->html_special = isset($data['html_special']) ? (string)$data['html_special'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? \WlSdk\RsPurchaseItemSid::tryFrom((int)$data['id_purchase_item']) : null;
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
