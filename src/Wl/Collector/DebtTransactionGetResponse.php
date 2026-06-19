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
     * @var array[]|null
     */
    public ?array $a_transaction = null;

    public function __construct(array $data)
    {
        $this->a_transaction = isset($data['a_transaction']) ? (array)$data['a_transaction'] : null;
    }
}
