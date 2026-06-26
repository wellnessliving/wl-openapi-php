<?php

namespace WlSdk\Wl\Shop\Product\ProductList;

class ListGetResponseProductOption
{
    /**
     * Shop product option key, primary key in RsShopProductOptionSql.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * Title of the product option.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_shop_product_option = isset($data['k_shop_product_option']) ? (string)$data['k_shop_product_option'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
