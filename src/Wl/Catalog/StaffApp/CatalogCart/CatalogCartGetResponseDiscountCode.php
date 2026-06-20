<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

class CatalogCartGetResponseDiscountCode
{
    /**
     * `true` if this code is selected currently, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_select = null;

    /**
     * Discount code key.
     *
     * @var string|null
     */
    public ?string $k_discount_code = null;

    /**
     * Value of the code that can be used to get discount.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    /**
     * Name of the code.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->is_select = isset($data['is_select']) ? (bool)$data['is_select'] : null;
        $this->k_discount_code = isset($data['k_discount_code']) ? (string)$data['k_discount_code'] : null;
        $this->text_discount_code = isset($data['text_discount_code']) ? (string)$data['text_discount_code'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
