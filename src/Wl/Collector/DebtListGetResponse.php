<?php
namespace WlSdk\Wl\Collector;

/**
 * Response from GET
 */
class DebtListGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_debt = null;

    public function __construct(array $data)
    {
        $this->a_debt = isset($data['a_debt']) ? (array)$data['a_debt'] : null;
    }
}
