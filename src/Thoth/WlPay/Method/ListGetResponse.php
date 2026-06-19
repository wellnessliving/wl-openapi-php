<?php
namespace WlSdk\Thoth\WlPay\Method;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_pay_method = null;

    public function __construct(array $data)
    {
        $this->a_pay_method = isset($data['a_pay_method']) ? (array)$data['a_pay_method'] : null;
    }
}
