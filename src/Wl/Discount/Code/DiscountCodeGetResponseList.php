<?php

namespace WlSdk\Wl\Discount\Code;

class DiscountCodeGetResponseList
{
    /**
     * `true` if the discount code is active, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * `true` if the discount code is removed, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_remove = null;

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
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->is_remove = isset($data['is_remove']) ? (bool)$data['is_remove'] : null;
        $this->k_discount_code = isset($data['k_discount_code']) ? (string)$data['k_discount_code'] : null;
        $this->text_discount_code = isset($data['text_discount_code']) ? (string)$data['text_discount_code'] : null;
    }
}
