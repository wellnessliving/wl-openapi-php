<?php

namespace WlSdk\Wl\Promotion\Editor\List;

class ListGetResponseFilterShopCategory
{
    /**
     * The key of the store category.
     *
     * @var string|null
     */
    public ?string $k_shop_category = null;

    /**
     * The title of the store category.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_shop_category = isset($data['k_shop_category']) ? (string)$data['k_shop_category'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
