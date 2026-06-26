<?php

namespace WlSdk\Thoth\WlPay\Transaction;

/**
 * Response from PUT
 */
class EditPutResponse
{
    /**
     * Changed amount of the transaction.
     *
     * @var string|null
     */
    public ?string $html_amount = null;

    /**
     * Changed date of the transaction.
     *
     * @var string|null
     */
    public ?string $html_date = null;

    public function __construct(array $data)
    {
        $this->html_amount = isset($data['html_amount']) ? (string)$data['html_amount'] : null;
        $this->html_date = isset($data['html_date']) ? (string)$data['html_date'] : null;
    }
}
