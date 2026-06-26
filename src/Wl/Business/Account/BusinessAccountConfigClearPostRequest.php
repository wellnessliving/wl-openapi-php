<?php

namespace WlSdk\Wl\Business\Account;

class BusinessAccountConfigClearPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Business account transaction key.
     *
     * @var string|null
     */
    public ?string $k_business_account_transaction = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_business_account_transaction' => $this->k_business_account_transaction,
            ],
            static fn ($v) => $v !== null
        );
    }
}
