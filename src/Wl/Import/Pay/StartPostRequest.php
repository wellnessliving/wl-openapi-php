<?php

namespace WlSdk\Wl\Import\Pay;

class StartPostRequest
{
    /**
     * ID of a merchant for which import should be started.
     *
     * @var string|null
     */
    public ?string $k_business_merchant = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business_merchant' => $this->k_business_merchant,
            ],
            static fn ($v) => $v !== null
        );
    }
}
