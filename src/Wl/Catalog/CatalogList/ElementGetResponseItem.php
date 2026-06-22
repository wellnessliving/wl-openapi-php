<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class ElementGetResponseItem
{
    /**
     * Contains additional data for the sale item.
     * For Package, it contains also the following key:
     *
     * The same structure as [ElementApi](/Wl/Catalog/CatalogList/Element.json) has.
     *
     * @var ElementGetResponseItemData|null
     */
    public ?ElementGetResponseItemData $a_data = null;

    /**
     * Contains information about one image connected to a sale item.
     *
     * @var ElementGetResponseItemImage|null
     */
    public ?ElementGetResponseItemImage $a_image = null;

    /**
     * Contains information about taxes.
     *
     * @var ElementGetResponseItemTax|null
     */
    public ?ElementGetResponseItemTax $a_tax = null;

    /**
     * The Purchase Option view type. One of the {@link \WlSdk\Wl\Catalog\PurchaseOptionViewSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Catalog\PurchaseOptionViewSid
     */
    public ?int $id_purchase_option_view = null;

    /**
     * The discount code amount.
     *
     * @var string|null
     */
    public ?string $m_discount_code = null;

    /**
     * The discount amount for the client type.
     *
     * @var string|null
     */
    public ?string $m_discount_login = null;

    /**
     * Additional information about the sale item. For example, information about 'introductory offer'.
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
     * The title of the sale item.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->a_data = isset($data['a_data']) ? new ElementGetResponseItemData((array)$data['a_data']) : null;
        $this->a_image = isset($data['a_image']) ? new ElementGetResponseItemImage((array)$data['a_image']) : null;
        $this->a_tax = isset($data['a_tax']) ? new ElementGetResponseItemTax((array)$data['a_tax']) : null;
        $this->id_purchase_option_view = isset($data['id_purchase_option_view']) ? (int)$data['id_purchase_option_view'] : null;
        $this->m_discount_code = isset($data['m_discount_code']) ? (string)$data['m_discount_code'] : null;
        $this->m_discount_login = isset($data['m_discount_login']) ? (string)$data['m_discount_login'] : null;
        $this->s_comment = isset($data['s_comment']) ? (string)$data['s_comment'] : null;
        $this->s_price = isset($data['s_price']) ? (string)$data['s_price'] : null;
        $this->s_sale = isset($data['s_sale']) ? (string)$data['s_sale'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
