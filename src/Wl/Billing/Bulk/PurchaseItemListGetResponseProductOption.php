<?php

namespace WlSdk\Wl\Billing\Bulk;

class PurchaseItemListGetResponseProductOption
{
    /**
     * The product option key.
     *
     * @var string|null
     */
    public ?string $k_shop_product_option = null;

    /**
     * The regular price of the option.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The product option title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->k_shop_product_option = isset($data['k_shop_product_option']) ? (string)$data['k_shop_product_option'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
