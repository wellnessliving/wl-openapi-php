<?php

namespace WlSdk\Wl\Catalog\Cart;

/**
 * Response from GET
 */
class DiscountCodeGetResponse
{
    /**
     * No description.
     *
     * @var DiscountCodeGetResponseDiscountCode|null
     */
    public ?DiscountCodeGetResponseDiscountCode $a_discount_code = null;

    /**
     * Error code. Empty string if no errors.
     *
     * @var string|null
     */
    public ?string $text_error_code = null;

    public function __construct(array $data)
    {
        $this->a_discount_code = isset($data['a_discount_code']) ? new DiscountCodeGetResponseDiscountCode((array)$data['a_discount_code']) : null;
        $this->text_error_code = isset($data['text_error_code']) ? (string)$data['text_error_code'] : null;
    }
}
