<?php

namespace WlSdk\Wl\Shop\Category;

class CategoryGetResponseShopCategory
{
    /**
     * Whether category is selected as default.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * The display order for the category.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * The shop category key.
     *
     * @var string|null
     */
    public ?string $k_shop_category = null;

    /**
     * The category description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * The category name.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->is_default = isset($data['is_default']) ? (bool)$data['is_default'] : null;
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->k_shop_category = isset($data['k_shop_category']) ? (string)$data['k_shop_category'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
