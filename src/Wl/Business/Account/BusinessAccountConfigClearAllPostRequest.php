<?php

namespace WlSdk\Wl\Business\Account;

class BusinessAccountConfigClearAllPostRequest
{
    /**
     * Business account transaction key.
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
