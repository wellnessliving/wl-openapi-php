<?php

namespace WlSdk\Thoth\WlPay\Bank;

class PrimaryPutRequest
{
    /**
     * ID of pay bank.
     *
     * @var string|null
     */
    public ?string $k_pay_bank = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_pay_bank' => $this->k_pay_bank,
            ],
            static fn ($v) => $v !== null
        );
    }
}
