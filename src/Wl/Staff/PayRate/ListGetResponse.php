<?php

namespace WlSdk\Wl\Staff\PayRate;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * Pay rate list:
     *
     * @var ListGetResponsePayRate[]|null
     */
    public ?array $a_pay_rate = null;

    public function __construct(array $data)
    {
        $this->a_pay_rate = isset($data['a_pay_rate']) ? array_map(static fn ($item) => new ListGetResponsePayRate((array)$item), (array)$data['a_pay_rate']) : null;
    }
}
