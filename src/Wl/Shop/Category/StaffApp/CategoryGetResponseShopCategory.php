<?php

namespace WlSdk\Wl\Shop\Category\StaffApp;

class CategoryGetResponseShopCategory
{
    /**
     * Shop category order.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * ID in RsShopCategorySql table.
     *
     * @var string|null
     */
    public ?string $k_shop_category = null;

    /**
     * Category description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Category title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->k_shop_category = isset($data['k_shop_category']) ? (string)$data['k_shop_category'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
