<?php

namespace WlSdk\Thoth\WlPay\Installment\Reschedule;

class InstallmentReschedulePostRequest
{
    /**
     * The key of the business to reschedule installment plan in.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key in the installment plan.
     *
     * @var string|null
     */
    public ?string $k_pay_installment = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_pay_installment' => $this->k_pay_installment,
            ],
            static fn ($v) => $v !== null
        );
    }
}
