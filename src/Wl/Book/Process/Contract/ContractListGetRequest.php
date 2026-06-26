<?php

namespace WlSdk\Wl\Book\Process\Contract;

class ContractListGetRequest
{
    /**
     * Booking wizard session key.
     *
     * @var string|null
     */
    public ?string $s_wizard_id = null;

    public function params(): array
    {
        return array_filter(
            [
            's_wizard_id' => $this->s_wizard_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
