<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCartEdit;

class EditViewGetRequest
{
    /**
     * Configuration information.
     *
     * Empty array means not set.
     *
     * @var array|null
     */
    public ?array $a_config = null;

    /**
     * List of manual set taxes.
     *
     * Empty array means not set.
     *
     * @var array|null
     */
    public ?array $a_tax = null;

    /**
     * Quantity of items.
     *
     * Empty value means not set.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    /**
     * ID of sale category. One of {@link \WlSdk\RsSaleSid}.
     *
     * Empty value means not set.
     *
     * @var int|null
     * @see \WlSdk\RsSaleSid
     */
    public ?int $id_sale = null;

    /**
     * ID of the sale item.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Shop product option ID.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * Price amount.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * Current user ID.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Client user ID.
     *
     * Empty string or `false` means 'walk-in' option
     *
     * @var string|null
     */
    public ?string $uid_customer = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_config' => $this->a_config,
            'a_tax' => $this->a_tax,
            'i_quantity' => $this->i_quantity,
            'id_sale' => $this->id_sale,
            'k_id' => $this->k_id,
            'k_location' => $this->k_location,
            'k_shop_product_option' => $this->k_shop_product_option,
            'm_price' => $this->m_price,
            'uid' => $this->uid,
            'uid_customer' => $this->uid_customer,
            ],
            static fn ($v) => $v !== null
        );
    }
}
