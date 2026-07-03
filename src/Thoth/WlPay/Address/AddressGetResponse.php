<?php

namespace WlSdk\Thoth\WlPay\Address;

/**
 * Response from GET
 */
class AddressGetResponse
{
    /**
     * The payee's address information.
     *
     * A list of payment addresses belonging to the owner. Each element:
     *
     * `null` if the current user has no access to the required information, or cannot edit the bank account.
     *
     * @var AddressGetResponsePayAddress[]|null
     */
    public ?array $a_pay_address = null;

    public function __construct(array $data)
    {
        $this->a_pay_address = isset($data['a_pay_address']) ? array_map(static fn ($item) => new AddressGetResponsePayAddress((array)$item), (array)$data['a_pay_address']) : null;
    }
}
