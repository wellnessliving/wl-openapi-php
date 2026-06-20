<?php

namespace WlSdk\Wl\Discount\Code;

class DiscountCodeGetResponseList
{
    /**
     * Discount code key.
     *
     * @var string|null
     */
    public ?string $k_discount_code = null;

    /**
     * Discount code title.
     *
     * @var string|null
     */
    public ?string $text_discount_code = null;

    public function __construct(array $data)
    {
        $this->k_discount_code = isset($data['k_discount_code']) ? (string)$data['k_discount_code'] : null;
        $this->text_discount_code = isset($data['text_discount_code']) ? (string)$data['text_discount_code'] : null;
    }
}
