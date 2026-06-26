<?php

namespace WlSdk\Wl\Shop\Product\ProductList;

class ListGetResponseProduct
{
    /**
     * No description.
     *
     * @var ListGetResponseProductOption|null
     */
    public ?ListGetResponseProductOption $a_option = null;

    /**
     * Product key, primary key in RsShopProductSql.
     *
     * @var string|null
     */
    public ?string $k_shop_product = null;

    /**
     * Title of product.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_option = isset($data['a_option']) ? new ListGetResponseProductOption((array)$data['a_option']) : null;
        $this->k_shop_product = isset($data['k_shop_product']) ? (string)$data['k_shop_product'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
