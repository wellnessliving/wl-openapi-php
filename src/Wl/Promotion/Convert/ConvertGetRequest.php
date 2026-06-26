<?php

namespace WlSdk\Wl\Promotion\Convert;

class ConvertGetRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The promotion key the given promotion will be converted to.
     *
     * @var string|null
     */
    public ?string $k_promotion_to = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_promotion_to' => $this->k_promotion_to,
            ],
            static fn ($v) => $v !== null
        );
    }
}
