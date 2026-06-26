<?php

namespace WlSdk\Thoth\WlPay\Transaction;

class StatusGetRequest
{
    /**
     * List of keys of transactions to get statuses for.
     *
     * Values are primary keys from the RsPayTransactionSql table.
     *
     * `null` if not initialized yet.
     *
     * @var string[]|null
     */
    public ?array $a_pay_transaction = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_pay_transaction' => $this->a_pay_transaction,
            ],
            static fn ($v) => $v !== null
        );
    }
}
