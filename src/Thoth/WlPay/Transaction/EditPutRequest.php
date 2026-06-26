<?php

namespace WlSdk\Thoth\WlPay\Transaction;

class EditPutRequest
{
    /**
     * ID of a payment transaction to change.
     *
     * Primary key from RsPayTransactionSql.
     *
     * May be empty if [EditApi](/Thoth/WlPay/Transaction/Edit.json) is specified.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * ID of a payment transaction process to change.
     *
     * Primary key from RsPayTransactionProcessSql.
     *
     * May be empty if [EditApi](/Thoth/WlPay/Transaction/Edit.json) is specified.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction_process = null;

    /**
     * New time of payment transaction:
     *
     *
     * Not specified if should not be changed.
     *
     * @var array|null
     */
    public ?array $a_time = null;

    /**
     * New date without time of payment transaction process.
     *
     * Not specified if should not be changed.
     *
     * @var string|null
     */
    public ?string $dt_date_local = null;

    /**
     * New base payment method of payment transaction. One of {@link \WlSdk\RsPayMethodSid} constants.
     *
     * Not specified if should not be changed.
     *
     * @var int|null
     * @see \WlSdk\RsPayMethodSid
     */
    public ?int $id_pay_method = null;

    /**
     * New custom payment method of payment transaction. Primary key from MethodSql.
     *
     * Not specified if should not be changed or if base payment method should be used.
     *
     * @var string|null
     */
    public ?string $k_pay_method = null;

    /**
     * New amount of payment transaction process.
     *
     * Not specified if should not be changed.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_pay_transaction' => $this->k_pay_transaction,
            'k_pay_transaction_process' => $this->k_pay_transaction_process,
            'a_time' => $this->a_time,
            'dt_date_local' => $this->dt_date_local,
            'id_pay_method' => $this->id_pay_method,
            'k_pay_method' => $this->k_pay_method,
            'm_amount' => $this->m_amount,
            ],
            static fn ($v) => $v !== null
        );
    }
}
