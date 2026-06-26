<?php

namespace WlSdk\Wl\Book\Process\Contract;

class ContractItemPutRequest
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

    /**
     * Whether client agrees to the contract.
     *
     * @var bool|null
     */
    public ?bool $is_agree = null;

    /**
     * User signature produced by Signature tool.
     *
     * @var string|null
     */
    public ?string $s_signature = null;

    public function params(): array
    {
        return array_filter(
            [
            's_purchase_item' => $this->s_purchase_item,
            's_wizard_id' => $this->s_wizard_id,
            'is_agree' => $this->is_agree,
            's_signature' => $this->s_signature,
            ],
            static fn ($v) => $v !== null
        );
    }
}
