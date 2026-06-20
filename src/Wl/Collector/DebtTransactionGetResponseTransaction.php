<?php

namespace WlSdk\Wl\Collector;

class DebtTransactionGetResponseTransaction
{
    /**
     * The date and time in UTC of the payment transaction.
     *
     * @var string|null
     */
    public ?string $dtu_pay = null;

    /**
     * The amount of the payment's transaction.
     *
     * @var string|null
     */
    public ?string $m_pay_amount = null;

    /**
     * The payment method ID that was used for the payment. One of {@link \WlSdk\RsPayMethodSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPayMethodSid
     */
    public ?int $id_pay_method = null;

    /**
     * Defines whether the payment was performed via a third party service.
     * `true` if the payment was performed via a third party service and this transaction is
     * responsible for an account credit transaction for that payment. See
     * [DebtPayApi](/Wl/Collector/DebtPay.json).
     * `false` if the payment was performed within the Wellnessliving system.
     *
     * @var bool|null
     */
    public ?bool $is_pay_collections = null;

    /**
     * Defines whether the initial debt to which this related transaction is fully paid.
     * `true` if the debt is fully paid.
     * `false` if the debt is partially paid.
     *
     * @var bool|null
     */
    public ?bool $is_debt_paid = null;

    /**
     * The full name of the debtor client for whom the payment transaction was performed.
     *
     * @var string|null
     */
    public ?string $text_client_name = null;

    /**
     * The UID of the debtor client for whom the payment transaction was performed.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->dtu_pay = isset($data['dtu_pay']) ? (string)$data['dtu_pay'] : null;
        $this->m_pay_amount = isset($data['m_pay_amount']) ? (string)$data['m_pay_amount'] : null;
        $this->id_pay_method = isset($data['id_pay_method']) ? (int)$data['id_pay_method'] : null;
        $this->is_pay_collections = isset($data['is_pay_collections']) ? (bool)$data['is_pay_collections'] : null;
        $this->is_debt_paid = isset($data['is_debt_paid']) ? (bool)$data['is_debt_paid'] : null;
        $this->text_client_name = isset($data['text_client_name']) ? (string)$data['text_client_name'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
