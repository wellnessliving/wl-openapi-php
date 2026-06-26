<?php

namespace WlSdk\Wl\Book\Process\Contract;

class ContractListPutRequest
{
    /**
     * Booking wizard session key.
     *
     * @var string|null
     */
    public ?string $s_wizard_id = null;

    /**
     * Whether contracts should be skipped.
     *
     * @var bool|null
     */
    public ?bool $is_contract_skip = null;

    public function params(): array
    {
        return array_filter(
            [
            's_wizard_id' => $this->s_wizard_id,
            'is_contract_skip' => $this->is_contract_skip,
            ],
            static fn ($v) => $v !== null
        );
    }
}
