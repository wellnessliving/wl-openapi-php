<?php

namespace WlSdk\Thoth\PayHardware\StripeCom;

class StripeComHardwareElementDeleteRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Terminal key.
     *
     * `null` in case when create new terminal.
     *
     * @var string|null
     */
    public ?string $k_terminal = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_terminal' => $this->k_terminal,
            ],
            static fn ($v) => $v !== null
        );
    }
}
