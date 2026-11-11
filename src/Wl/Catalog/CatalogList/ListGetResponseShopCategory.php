<?php

namespace WlSdk\Wl\Catalog\CatalogList;

class ListGetResponseShopCategory
{
    /**
     * Order of the category in the sidebar.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * `true` if the category is selected by default, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * Key of the category. `0` for the system category of the items without a category.
     *
     * @var string|null
     */
    public ?string $k_shop_category = null;

    /**
     * Title of the category.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->is_default = isset($data['is_default']) ? (bool)$data['is_default'] : null;
        $this->k_shop_category = isset($data['k_shop_category']) ? (string)$data['k_shop_category'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
