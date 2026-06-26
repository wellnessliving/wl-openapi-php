<?php

namespace WlSdk\Wl\Book\Process\Contract;

class ContractItemGetRequest
{
    /**
     * Key of purchase option, one of array keys returned by RsBookProcess::purchase().
     *
     * @var string|null
     */
    public ?string $s_purchase_item = null;

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
            's_purchase_item' => $this->s_purchase_item,
            's_wizard_id' => $this->s_wizard_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
