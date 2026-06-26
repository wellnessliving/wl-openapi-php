<?php

namespace WlSdk\Thoth\WlPay\Bank;

class EntityPostRequest
{
    /**
     * ID of the currency of this payment entity is managed.
     *
     * @var int|null
     */
    public ?int $id_currency = null;

    /**
     * Key of the business within which this payment entity is managed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location within which this payment entity is managed.
     *
     * Empty string, zero should be passed here if a business-wide merchant should be used.
     * In this case it is also allowed to not to pass this parameter.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Contains data associated with payment source.
     *
     * Structure of this array depends on type of the payment source.
     *
     * @var array|null
     */
    public ?array $a_data = null;

    /**
     * Type of payment source.
     *
     * One of {@link \WlSdk\RsPayMethodSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPayMethodSid
     */
    public ?int $id_pay_method = null;

    /**
     * Key of payment owner.
     *
     * @var string|null
     */
    public ?string $k_pay_owner = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_currency' => $this->id_currency,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'a_data' => $this->a_data,
            'id_pay_method' => $this->id_pay_method,
            'k_pay_owner' => $this->k_pay_owner,
            ],
            static fn ($v) => $v !== null
        );
    }
}
