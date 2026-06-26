<?php

namespace WlSdk\Thoth\PayProcessor\DirectConnect\Terminal;

class TerminalTransactionCancelPostRequest
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
     * Key of the business merchant that should be used to perform the request.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_business_merchant = null;

    /**
     * Pay transaction key, which was used to create payment intent.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_business_merchant' => $this->k_business_merchant,
            'k_pay_transaction' => $this->k_pay_transaction,
            ],
            static fn ($v) => $v !== null
        );
    }
}
