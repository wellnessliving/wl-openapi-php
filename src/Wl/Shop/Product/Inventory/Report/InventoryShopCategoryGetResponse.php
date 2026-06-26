<?php

namespace WlSdk\Wl\Shop\Product\Inventory\Report;

/**
 * Response from GET
 */
class InventoryShopCategoryGetResponse
{
    /**
     * An array containing information about store categories.
     * Each array element is an array containing the following fields:
     *
     * @var InventoryShopCategoryGetResponseShopCategory[]|null
     */
    public ?array $a_shop_category = null;

    public function __construct(array $data)
    {
        $this->a_shop_category = isset($data['a_shop_category']) ? array_map(static fn ($item) => new InventoryShopCategoryGetResponseShopCategory((array)$item), (array)$data['a_shop_category']) : null;
    }
}
