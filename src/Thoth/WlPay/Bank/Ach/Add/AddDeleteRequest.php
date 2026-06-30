<?php

namespace WlSdk\Thoth\WlPay\Bank\Ach\Add;

class AddDeleteRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Pay bank key to delete.
     *
     * @var string|null
     */
    public ?string $k_pay_bank = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_pay_bank' => $this->k_pay_bank,
            ],
            static fn ($v) => $v !== null
        );
    }
}
