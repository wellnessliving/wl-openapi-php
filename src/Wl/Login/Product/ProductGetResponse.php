<?php

namespace WlSdk\Wl\Login\Product;

/**
 * Response from GET
 */
class ProductGetResponse
{
    /**
     * List of purchased products:
     *
     * @var ProductGetResponseLoginProduct|null
     */
    public ?ProductGetResponseLoginProduct $a_login_product = null;

    public function __construct(array $data)
    {
        $this->a_login_product = isset($data['a_login_product']) ? new ProductGetResponseLoginProduct((array)$data['a_login_product']) : null;
    }
}
