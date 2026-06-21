<?php

namespace WlSdk\Wl\Catalog\CatalogList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * The list of all sale items (de-duplicated). Each element has the following keys:
     *
     * @var ListGetResponseProduct[]|null
     */
    public ?array $a_product = null;

    /**
     * The list of products to show with duplicates.
     *
     * Products have their own order within every shop category, and they can be related to several categories.
     * As a design decision, products are sorted in the backend using duplicates for every category.
     *
     * @var ListGetResponseProductDuplicate|null
     */
    public ?ListGetResponseProductDuplicate $a_product_duplicate = null;

    public function __construct(array $data)
    {
        $this->a_product = isset($data['a_product']) ? array_map(static fn ($item) => new ListGetResponseProduct((array)$item), (array)$data['a_product']) : null;
        $this->a_product_duplicate = isset($data['a_product_duplicate']) ? new ListGetResponseProductDuplicate((array)$data['a_product_duplicate']) : null;
    }
}
