<?php

namespace WlSdk\Thoth\WlPay\Method;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * A list of payment methods:
     *
     * @var ListGetResponsePayMethod[]|null
     */
    public ?array $a_pay_method = null;

    public function __construct(array $data)
    {
        $this->a_pay_method = isset($data['a_pay_method']) ? array_map(static fn ($item) => new ListGetResponsePayMethod((array)$item), (array)$data['a_pay_method']) : null;
    }
}
