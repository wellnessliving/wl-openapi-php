<?php

namespace WlSdk\Wl\Discount\Code;

class DiscountCodeGetRequest
{
    /**
     * Business key of the discount codes.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
