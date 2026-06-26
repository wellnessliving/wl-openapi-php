<?php

namespace WlSdk\Thoth\WlPay\Bank\Ach\Add;

class AddDeleteRequest
{
    /**
     * Business key. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Pay bank key to delete. Primary key in RsPayBankSql table.
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
