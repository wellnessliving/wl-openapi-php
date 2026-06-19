<?php
namespace WlSdk\Wl\Catalog\StaffApp\CatalogView;

class CatalogViewGetRequest
{
    /**
     * Configuration information about the item, which can specify prorated amounts.
     * 
     * If set, these values will change the values returned by the endpoint call.
     *
     * @var array[]|null
     */
    public ?array $a_config = null;

    /**
     * Contains information about edited taxes.
     * 
     * This will be `null` if not set yet or default taxes are used.
     * 
     * The key is the tax identifier, where the value is:
     *
     * @var array[]|null
     */
    public ?array $a_tax = null;

    /**
     * The quantity of items.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    /**
     * The ID of the sale category. One of the [RsSaleSid](#/components/schemas/RsSaleSid) constants.
     *
     * @var int|null
     */
    public ?int $id_sale = null;

    /**
     * The business key.
     * This will be `null` for the system business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the sale item.
     * This can be retrieved with the [CatalogListApi](/Wl/Catalog/StaffApp/CatalogList/CatalogList.json) endpoint
     * (see the
     * `a_shop_product` parameter).
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * The product option key.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * The custom price of the sale item.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The ID of the user who performed the actions.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_config' => $this->a_config,
            'a_tax' => $this->a_tax,
            'i_quantity' => $this->i_quantity,
            'id_sale' => $this->id_sale,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            'k_shop_product_option' => $this->k_shop_product_option,
            'm_price' => $this->m_price,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
