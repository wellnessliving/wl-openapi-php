<?php

namespace WlSdk\Thoth\PayProcessor\CyberSource;

class CsPaValidatePostRequest
{
    /**
     * Key of payment transaction that was previously created with {@link
     * \WlSdk\Thoth\PayProcessor\CyberSource\CsPaSetup}.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * Payer authentication transaction ID.
     *
     * @var string|null
     */
    public ?string $s_transaction = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_pay_transaction' => $this->k_pay_transaction,
            's_transaction' => $this->s_transaction,
            ],
            static fn ($v) => $v !== null
        );
    }
}
