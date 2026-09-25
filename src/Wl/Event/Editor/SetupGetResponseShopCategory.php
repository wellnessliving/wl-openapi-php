<?php

namespace WlSdk\Wl\Event\Editor;

class SetupGetResponseShopCategory
{
    /**
     * Key of the category.
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
        $this->k_shop_category = isset($data['k_shop_category']) ? (string)$data['k_shop_category'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
