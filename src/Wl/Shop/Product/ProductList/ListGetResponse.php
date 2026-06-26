<?php

namespace WlSdk\Wl\Shop\Product\ProductList;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * List of products.
     *
     * @var ListGetResponseProduct[]|null
     */
    public ?array $a_product = null;

    public function __construct(array $data)
    {
        $this->a_product = isset($data['a_product']) ? array_map(static fn ($item) => new ListGetResponseProduct((array)$item), (array)$data['a_product']) : null;
    }
}
