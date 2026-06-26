<?php

namespace WlSdk\Thoth\WlPay\Transaction;

class StatusGetResponsePayTransactionData
{
    /**
     * Transaction payment status. One of {@link \WlSdk\RsPayTransactionStatusSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPayTransactionStatusSid
     */
    public ?int $id_pay_transaction_status = null;

    /**
     * Business key. Primary key from the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Transaction key. Primary key from the RsPayTransactionSql table.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    public function __construct(array $data)
    {
        $this->id_pay_transaction_status = isset($data['id_pay_transaction_status']) ? (int)$data['id_pay_transaction_status'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_pay_transaction = isset($data['k_pay_transaction']) ? (string)$data['k_pay_transaction'] : null;
    }
}
