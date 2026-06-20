<?php
namespace WlSdk\Wl\Catalog\CatalogList;

class CatalogProductGetResponseCategorySort
{
    /**
     * The order of the products by category if
     * [ShopCategorySortSid::CUSTOM](#/components/schemas/Wl.Shop.Category.ShopCategorySortSid) is selected.
     * Each element is a product key string, ordered as desired.
     *
     * @var int[]|null
     */
    public ?array $a_order = null;

    /**
     * The sort order. One of the [SortOrderSid](#/components/schemas/Core.Sid.SortOrderSid) constants.
     *
     * @var int|null
     */
    public ?int $id_order = null;

    /**
     * The sort field ID. One of the
     * [ShopCategorySortSid](#/components/schemas/Wl.Shop.Category.ShopCategorySortSid) constants.
     *
     * @var int|null
     */
    public ?int $id_sort = null;

    public function __construct(array $data)
    {
        $this->a_order = isset($data['a_order']) ? (array)$data['a_order'] : null;
        $this->id_order = isset($data['id_order']) ? (int)$data['id_order'] : null;
        $this->id_sort = isset($data['id_sort']) ? (int)$data['id_sort'] : null;
    }
}
