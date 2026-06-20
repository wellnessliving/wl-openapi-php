<?php

namespace WlSdk\Wl\Discount\Code\Edit;

class DiscountCodeEditGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the discount code. Empty, if this is creation of a new code.
     *
     * @var string|null
     */
    public ?string $k_discount_code = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_discount_code' => $this->k_discount_code,
            ],
            static fn ($v) => $v !== null
        );
    }
}
