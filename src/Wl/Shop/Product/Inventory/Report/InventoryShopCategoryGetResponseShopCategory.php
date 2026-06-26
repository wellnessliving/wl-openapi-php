<?php

namespace WlSdk\Wl\Shop\Product\Inventory\Report;

class InventoryShopCategoryGetResponseShopCategory
{
    /**
     * The shop category key. Primary key in RsShopCategorySql table.
     *
     * @var string|null
     */
    public ?string $k_shop_category = null;

    /**
     * The category name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_shop_category = isset($data['k_shop_category']) ? (string)$data['k_shop_category'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
