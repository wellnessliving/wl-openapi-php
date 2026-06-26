<?php

namespace WlSdk\Thoth\WlPay\Bank\Ach\Widget;

class WidgetSelectGetRequest
{
    /**
     * Pay bank id.
     *
     * @var int|null
     */
    public ?int $id_pay_bank = null;

    /**
     * Payment method.
     *
     * @var int|null
     * @see \WlSdk\RsPayMethodSid
     */
    public ?int $id_pay_method = null;

    /**
     * Payment owner kind.
     *
     * @var int|null
     * @see \WlSdk\RsPayOwnerSid
     */
    public ?int $id_pay_owner = null;

    /**
     * Business key.
     * `null` if use system business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Currency key.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * Payment owner.
     * Must be primary key of a business or a user.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Location key.
     * `null` to use system-wide merchant.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_pay_bank' => $this->id_pay_bank,
            'id_pay_method' => $this->id_pay_method,
            'id_pay_owner' => $this->id_pay_owner,
            'k_business' => $this->k_business,
            'k_currency' => $this->k_currency,
            'k_id' => $this->k_id,
            'k_location' => $this->k_location,
            ],
            static fn ($v) => $v !== null
        );
    }
}
