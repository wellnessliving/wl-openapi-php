<?php

namespace WlSdk\Thoth\WlPay\Transaction;

/**
 * Response from POST
 */
class StatusPostResponse
{
    /**
     * Loaded data about transactions. Values are array with the following properties:
     *
     *
     * `null` if not initialized yet.
     *
     * @var StatusPostResponsePayTransactionData|null
     */
    public ?StatusPostResponsePayTransactionData $a_pay_transaction_data = null;

    public function __construct(array $data)
    {
        $this->a_pay_transaction_data = isset($data['a_pay_transaction_data']) ? new StatusPostResponsePayTransactionData((array)$data['a_pay_transaction_data']) : null;
    }
}
