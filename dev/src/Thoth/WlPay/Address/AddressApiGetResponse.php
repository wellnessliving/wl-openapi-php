<?php
namespace WlSdk\Thoth\WlPay\Address;

/**
 * Response from GET
 */
class AddressApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_pay_address = null;

    public function __construct(array $data)
    {
        $this->a_pay_address = isset($data['a_pay_address']) ? (array)$data['a_pay_address'] : null;
    }
}
