<?php
namespace WlSdk\Wl\Collector;

/**
 * Response from GET
 */
class DebtTransactionGetResponse
{
    /**
     * No description.
     *
     * @var DebtTransactionGetResponseTransaction[]|null
     */
    public ?array $a_transaction = null;

    public function __construct(array $data)
    {
        $this->a_transaction = isset($data['a_transaction']) ? array_map(static fn($item) => new DebtTransactionGetResponseTransaction((array)$item), (array)$data['a_transaction']) : null;
    }
}
