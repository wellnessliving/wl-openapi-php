<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

class NuveiTransactionCancelPostRequest
{
    /**
     * Key of the business which receives the payment.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of payment transaction that was created in {@link \WlSdk\Thoth\PayProcessor\Nuvei\NuveiOpenOrder}.
     *
     * This will be `null` if not loaded yet.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_pay_transaction' => $this->k_pay_transaction,
            ],
            static fn ($v) => $v !== null
        );
    }
}
