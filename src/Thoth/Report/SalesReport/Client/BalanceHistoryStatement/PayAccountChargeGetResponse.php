<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\BalanceHistoryStatement;

/**
 * Response from GET
 */
class PayAccountChargeGetResponse
{
    /**
     * List of account pay methods with their charge URLs.
     *
     * Each element has the following structure:
     *
     * @var PayAccountChargeGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new PayAccountChargeGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
