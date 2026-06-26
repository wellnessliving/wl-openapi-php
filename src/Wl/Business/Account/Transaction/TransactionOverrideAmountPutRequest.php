<?php

namespace WlSdk\Wl\Business\Account\Transaction;

class TransactionOverrideAmountPutRequest
{
    /**
     * Business key for which transaction belong.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Failed business account transaction for which amount should be changed.
     *
     * @var string|null
     */
    public ?string $k_business_account_transaction = null;

    /**
     * Override transaction amount.
     *
     * `null` to set default value.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_business_account_transaction' => $this->k_business_account_transaction,
            'm_amount' => $this->m_amount,
            ],
            static fn ($v) => $v !== null
        );
    }
}
