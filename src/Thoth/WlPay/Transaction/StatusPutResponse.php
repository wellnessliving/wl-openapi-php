<?php

namespace WlSdk\Thoth\WlPay\Transaction;

/**
 * Response from PUT
 */
class StatusPutResponse
{
    /**
     * HTML output of PayTransactionStatus based on `k_pay_transaction`.
     *
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $html_pay_transaction_status = null;

    public function __construct(array $data)
    {
        $this->html_pay_transaction_status = isset($data['html_pay_transaction_status']) ? (string)$data['html_pay_transaction_status'] : null;
    }
}
