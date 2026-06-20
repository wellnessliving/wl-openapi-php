<?php

namespace WlSdk\Wl\Appointment\Book\Product;

/**
 * Response from GET
 */
class ProductGetResponse
{
    /**
     * No description.
     *
     * @var ProductGetResponseProduct[]|null
     */
    public ?array $a_product = null;

    public function __construct(array $data)
    {
        $this->a_product = isset($data['a_product']) ? array_map(static fn ($item) => new ProductGetResponseProduct((array)$item), (array)$data['a_product']) : null;
    }
}
