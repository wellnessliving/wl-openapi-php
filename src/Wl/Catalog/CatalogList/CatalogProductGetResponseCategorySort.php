<?php
namespace WlSdk\Wl\Catalog\CatalogList;

class CatalogProductGetResponseCategorySort
{
    /**
     * The order of the products by category if {@link \WlSdk\Wl\Shop\Category\ShopCategorySortSid} is selected.
     * Each element is a product key string, ordered as desired.
     *
     * @var int[]|null
     */
    public ?array $a_order = null;

    /**
     * The sort order. One of the {@link \WlSdk\Core\Sid\SortOrderSid} constants.
     *
     * @var \WlSdk\Core\Sid\SortOrderSid|null
     */
    public ?\WlSdk\Core\Sid\SortOrderSid $id_order = null;

    /**
     * The sort field ID. One of the {@link \WlSdk\Wl\Shop\Category\ShopCategorySortSid} constants.
     *
     * @var \WlSdk\Wl\Shop\Category\ShopCategorySortSid|null
     */
    public ?\WlSdk\Wl\Shop\Category\ShopCategorySortSid $id_sort = null;

    public function __construct(array $data)
    {
        $this->a_order = isset($data['a_order']) ? (array)$data['a_order'] : null;
        $this->id_order = isset($data['id_order']) ? \WlSdk\Core\Sid\SortOrderSid::tryFrom((int)$data['id_order']) : null;
        $this->id_sort = isset($data['id_sort']) ? \WlSdk\Wl\Shop\Category\ShopCategorySortSid::tryFrom((int)$data['id_sort']) : null;
    }
}
