<?php

namespace WlSdk\Thoth\WlPay\Transaction\Report;

class TransactionAllPaymentGetResponseRowPayTransaction
{
    /**
     * Payment method ID. One of {@link \WlSdk\RsPayMethodSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPayMethodSid
     */
    public ?int $id_pay_method = null;

    /**
     * Pay transaction key.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * Amount paid.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * Surcharge amount from store settings.
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    /**
     * Batch number for this transaction.
     *
     * @var string|int|null
     */
    public $s_batch_number = null;

    public function __construct(array $data)
    {
        $this->id_pay_method = isset($data['id_pay_method']) ? (int)$data['id_pay_method'] : null;
        $this->k_pay_transaction = isset($data['k_pay_transaction']) ? (string)$data['k_pay_transaction'] : null;
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
        $this->m_surcharge = isset($data['m_surcharge']) ? (string)$data['m_surcharge'] : null;
        $this->s_batch_number = $data['s_batch_number'] ?? null;
    }
}
