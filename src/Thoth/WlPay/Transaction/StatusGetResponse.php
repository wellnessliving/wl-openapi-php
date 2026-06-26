<?php

namespace WlSdk\Thoth\WlPay\Transaction;

/**
 * Response from GET
 */
class StatusGetResponse
{
    /**
     * Loaded data about transactions. Values are array with the following properties:
     *
     *
     * `null` if not initialized yet.
     *
     * @var StatusGetResponsePayTransactionData|null
     */
    public ?StatusGetResponsePayTransactionData $a_pay_transaction_data = null;

    public function __construct(array $data)
    {
        $this->a_pay_transaction_data = isset($data['a_pay_transaction_data']) ? new StatusGetResponsePayTransactionData((array)$data['a_pay_transaction_data']) : null;
    }
}
