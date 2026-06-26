<?php

namespace WlSdk\Wl\Book\Process\Contract;

/**
 * Response from PUT
 */
class ContractListPutResponse
{
    /**
     * Whether contracts should be skipped.
     *
     * @var bool|null
     */
    public ?bool $is_contract_skip = null;

    public function __construct(array $data)
    {
        $this->is_contract_skip = isset($data['is_contract_skip']) ? (bool)$data['is_contract_skip'] : null;
    }
}
