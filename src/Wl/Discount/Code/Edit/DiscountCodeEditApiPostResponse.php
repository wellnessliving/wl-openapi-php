<?php
namespace WlSdk\Wl\Discount\Code\Edit;

/**
 * Response from POST
 */
class DiscountCodeEditApiPostResponse
{
    /**
     * Key of the discount code. Empty, if this is creation of a new code.
     *
     * @var string|null
     */
    public ?string $k_discount_code = null;

    public function __construct(array $data)
    {
        $this->k_discount_code = isset($data['k_discount_code']) ? (string)$data['k_discount_code'] : null;
    }
}
