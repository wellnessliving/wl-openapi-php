<?php

namespace WlSdk\Wl\Book\Process\Contract;

class ContractListGetResponseContractList
{
    /**
     * Whether client already agreed to this contract.
     *
     * @var bool|null
     */
    public ?bool $is_agree = null;

    /**
     * Key of purchase option, one of array keys returned by RsBookProcess::purchase().
     *
     * @var string|null
     */
    public ?string $s_purchase_item = null;

    /**
     * Client's signature, if this contract has already been signed.
     *
     * @var string|null
     */
    public ?string $s_signature = null;

    public function __construct(array $data)
    {
        $this->is_agree = isset($data['is_agree']) ? (bool)$data['is_agree'] : null;
        $this->s_purchase_item = isset($data['s_purchase_item']) ? (string)$data['s_purchase_item'] : null;
        $this->s_signature = isset($data['s_signature']) ? (string)$data['s_signature'] : null;
    }
}
