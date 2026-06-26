<?php

namespace WlSdk\Thoth\PayProcessor\CyberSource;

class CsPaEnrollmentPostRequest
{
    /**
     * User device info:
     *
     * @var array|null
     */
    public ?array $a_device_info = null;

    /**
     * Key of payment transaction that was previously created with
     * [CsPaSetupApi](/Thoth/PayProcessor/CyberSource/CsPaSetup.json).
     *
     * Primary key in RsPayTransactionSql.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_device_info' => $this->a_device_info,
            'k_pay_transaction' => $this->k_pay_transaction,
            ],
            static fn ($v) => $v !== null
        );
    }
}
