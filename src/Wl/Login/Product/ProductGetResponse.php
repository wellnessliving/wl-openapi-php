<?php

namespace WlSdk\Wl\Login\Product;

/**
 * Response from GET
 */
class ProductGetResponse
{
    /**
     * No description.
     *
     * @var ProductGetResponseLoginProduct[]|null
     */
    public ?array $a_login_product = null;

    public function __construct(array $data)
    {
        $this->a_login_product = isset($data['a_login_product']) ? array_map(static fn ($item) => new ProductGetResponseLoginProduct((array)$item), (array)$data['a_login_product']) : null;
    }
}
