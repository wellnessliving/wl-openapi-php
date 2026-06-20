<?php
namespace WlSdk\Wl\Collector;

/**
 * Response from GET
 */
class DebtTransactionGetResponse
{
    /**
     * A list of debt payments for a given business added within the previous day.
     * 
     * Each value is an array with next structure:
     *
     * @var DebtTransactionGetResponseTransaction[]|null
     */
    public ?array $a_transaction = null;

    public function __construct(array $data)
    {
        $this->a_transaction = isset($data['a_transaction']) ? array_map(static fn($item) => new DebtTransactionGetResponseTransaction((array)$item), (array)$data['a_transaction']) : null;
    }
}
