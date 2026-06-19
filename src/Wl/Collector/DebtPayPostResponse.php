<?php
namespace WlSdk\Wl\Collector;

/**
 * Response from POST
 */
class DebtPayPostResponse
{
    /**
     * The transaction key generated to register the payment.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    public function __construct(array $data)
    {
        $this->k_pay_transaction = isset($data['k_pay_transaction']) ? (string)$data['k_pay_transaction'] : null;
    }
}
