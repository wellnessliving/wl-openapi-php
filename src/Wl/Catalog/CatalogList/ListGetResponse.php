<?php

namespace WlSdk\Wl\Catalog\CatalogList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * The list of all sale items (de-duplicated). In the paged mode, only the items of the page or the found
     *   items, see {@link \WlSdk\Wl\Catalog\CatalogList\ListEndpoint} and {@link
     * \WlSdk\Wl\Catalog\CatalogList\ListEndpoint}. Each element has the following keys:
     *
     * @var ListGetResponseProduct[]|null
     */
    public ?array $a_product = null;

    /**
     * The list of products to show with duplicates.
     *
     * Products have their own order within every shop category, and they can be related to several categories.
     * As a design decision, products are sorted in the backend using duplicates for every category.
     * Empty in the paged mode, see {@link \WlSdk\Wl\Catalog\CatalogList\ListEndpoint} and {@link
     * \WlSdk\Wl\Catalog\CatalogList\ListEndpoint}.
     *
     * @var ListGetResponseProductDuplicate|null
     */
    public ?ListGetResponseProductDuplicate $a_product_duplicate = null;

    /**
     * Categories of the sidebar of the paged mode, sorted by their order. Only the categories that have items
     *   after the filters `a_sale_id`, `a_schema`, `a_settings`, `is_application_hide` and `k_location` of
     *   {@link \WlSdk\Wl\Catalog\CatalogList\ListEndpoint}, with the category `0` when there are items without a
     * category. Returned only
     *   when {@link \WlSdk\Wl\Catalog\CatalogList\ListEndpoint} is `0`, empty otherwise.
     *
     *   Each element has the following keys:
     *
     * @var ListGetResponseShopCategory[]|null
     */
    public ?array $a_shop_category = null;

    /**
     * Whether the catalog of the paged mode has no items at all.
     *
     * `true` if no item is left after the filters `a_sale_id`, `a_schema`, `a_settings` and `is_application_hide`
     *   of {@link \WlSdk\Wl\Catalog\CatalogList\ListEndpoint}, `false` otherwise. The category, the search and
     * `k_location` of the filter
     *   do not change it. Always `false` when the paged mode is not used.
     *
     * @var bool|null
     */
    public ?bool $is_catalog_empty = null;

    /**
     * Whether there are more items after the page of the paged mode.
     *
     * `true` if more items follow the page, `false` if the page is the last one, if the items were looked up by
     *   {@link \WlSdk\Wl\Catalog\CatalogList\ListEndpoint} or if the paged mode is not used.
     *
     * @var bool|null
     */
    public ?bool $is_load_more = null;

    public function __construct(array $data)
    {
        $this->a_product = isset($data['a_product']) ? array_map(static fn ($item) => new ListGetResponseProduct((array)$item), (array)$data['a_product']) : null;
        $this->a_product_duplicate = isset($data['a_product_duplicate']) ? new ListGetResponseProductDuplicate((array)$data['a_product_duplicate']) : null;
        $this->a_shop_category = isset($data['a_shop_category']) ? array_map(static fn ($item) => new ListGetResponseShopCategory((array)$item), (array)$data['a_shop_category']) : null;
        $this->is_catalog_empty = isset($data['is_catalog_empty']) ? (bool)$data['is_catalog_empty'] : null;
        $this->is_load_more = isset($data['is_load_more']) ? (bool)$data['is_load_more'] : null;
    }
}
