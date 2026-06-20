<?php

namespace WlSdk\Wl\Collector;

/**
 * Response from GET
 */
class DebtListGetResponse
{
    /**
     * A list of debts for the given business added within the previous month.
     *
     * Each value is an array with the next structure:
     *
     * @var DebtListGetResponseDebt[]|null
     */
    public ?array $a_debt = null;

    public function __construct(array $data)
    {
        $this->a_debt = isset($data['a_debt']) ? array_map(static fn ($item) => new DebtListGetResponseDebt((array)$item), (array)$data['a_debt']) : null;
    }
}
