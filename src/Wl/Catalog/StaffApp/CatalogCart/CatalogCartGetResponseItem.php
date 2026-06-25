<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

class CatalogCartGetResponseItem
{
    /**
     * The list of purchase item additional options:
     *
     * @var CatalogCartGetResponseItemConfig|null
     */
    public ?CatalogCartGetResponseItemConfig $a_config = null;

    /**
     * Information about taxes. If not passed, no custom taxes have been applied to the sale item.
     * If a record is present, the tax is custom using the next structure:
     *
     * @var CatalogCartGetResponseItemTaxCustom|null
     */
    public ?CatalogCartGetResponseItemTaxCustom $a_tax_custom = null;

    /**
     * The discount percentage, applied to the current item.
     *
     * @var float|null
     */
    public ?float $f_discount_percent = null;

    /**
     * The quantity of sale items.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    /**
     * The sale item type. One of the {@link \WlSdk\RsSaleSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsSaleSid
     */
    public ?int $id_sale = null;

    /**
     * The sale item key.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The store product option key. This will be `null` if the sale item has no options.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * The fixed price discount, applied to the current item.
     *
     * @var string|null
     */
    public ?string $m_discount_fix = null;

    /**
     * The custom price of the sale item. If not passed, no custom price has been applied to the sale item.
     *
     * @var string|null
     */
    public ?string $m_price_custom = null;

    public function __construct(array $data)
    {
        $this->a_config = isset($data['a_config']) ? new CatalogCartGetResponseItemConfig((array)$data['a_config']) : null;
        $this->a_tax_custom = isset($data['a_tax_custom']) ? new CatalogCartGetResponseItemTaxCustom((array)$data['a_tax_custom']) : null;
        $this->f_discount_percent = isset($data['f_discount_percent']) ? (float)$data['f_discount_percent'] : null;
        $this->i_quantity = isset($data['i_quantity']) ? (int)$data['i_quantity'] : null;
        $this->id_sale = isset($data['id_sale']) ? (int)$data['id_sale'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->k_shop_product_option = isset($data['k_shop_product_option']) ? (string)$data['k_shop_product_option'] : null;
        $this->m_discount_fix = isset($data['m_discount_fix']) ? (string)$data['m_discount_fix'] : null;
        $this->m_price_custom = isset($data['m_price_custom']) ? (string)$data['m_price_custom'] : null;
    }
}
