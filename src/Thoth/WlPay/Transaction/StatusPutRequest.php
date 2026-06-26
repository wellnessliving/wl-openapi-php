<?php

namespace WlSdk\Thoth\WlPay\Transaction;

class StatusPutRequest
{
    /**
     * ID of a payment transaction to change.
     *
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * New status of payment transaction.
     *
     * One of {@link \WlSdk\RsPayTransactionStatusSid} constants.
     *
     * `null` if not initialized yet.
     *
     * @var int|null
     * @see \WlSdk\RsPayTransactionStatusSid
     */
    public ?int $id_pay_transaction_status = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_pay_transaction' => $this->k_pay_transaction,
            'id_pay_transaction_status' => $this->id_pay_transaction_status,
            ],
            static fn ($v) => $v !== null
        );
    }
}
