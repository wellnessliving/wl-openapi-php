<?php

namespace WlSdk\Wl\Billing\Code;

class BillingCodeGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the custom billing code.
     *
     * @var string|null
     */
    public ?string $k_code = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_code' => $this->k_code,
            ],
            static fn ($v) => $v !== null
        );
    }
}
