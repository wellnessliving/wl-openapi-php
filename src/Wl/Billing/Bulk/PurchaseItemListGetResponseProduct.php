<?php

namespace WlSdk\Wl\Billing\Bulk;

class PurchaseItemListGetResponseProduct
{
    /**
     * The options of the product available at the location. Each element has the following structure:
     *
     * @var PurchaseItemListGetResponseProductOption|null
     */
    public ?PurchaseItemListGetResponseProductOption $a_option = null;

    /**
     * `true` if no taxes should be applied to the product, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_tax_free = null;

    /**
     * The product key.
     *
     * @var string|null
     */
    public ?string $k_shop_product = null;

    /**
     * The product title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_option = isset($data['a_option']) ? new PurchaseItemListGetResponseProductOption((array)$data['a_option']) : null;
        $this->is_tax_free = isset($data['is_tax_free']) ? (bool)$data['is_tax_free'] : null;
        $this->k_shop_product = isset($data['k_shop_product']) ? (string)$data['k_shop_product'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
