<?php
namespace WlSdk\Wl\Catalog\CatalogList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * No description.
     *
     * @var ListGetResponseProduct[]|null
     */
    public ?array $a_product = null;

    /**
     * No description.
     *
     * @var ListGetResponseProductDuplicate[]|null
     */
    public ?array $a_product_duplicate = null;

    public function __construct(array $data)
    {
        $this->a_product = isset($data['a_product']) ? array_map(static fn($item) => new ListGetResponseProduct((array)$item), (array)$data['a_product']) : null;
        $this->a_product_duplicate = isset($data['a_product_duplicate']) ? array_map(static fn($item) => new ListGetResponseProductDuplicate((array)$item), (array)$data['a_product_duplicate']) : null;
    }
}
