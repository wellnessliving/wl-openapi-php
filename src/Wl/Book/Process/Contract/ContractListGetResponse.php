<?php

namespace WlSdk\Wl\Book\Process\Contract;

/**
 * Response from GET
 */
class ContractListGetResponse
{
    /**
     * List of purchase options with contracts. Value has following structure:
     *
     * @var ContractListGetResponseContractList|null
     */
    public ?ContractListGetResponseContractList $a_contract_list = null;

    /**
     * Whether contracts should be skipped.
     *
     * @var bool|null
     */
    public ?bool $is_contract_skip = null;

    public function __construct(array $data)
    {
        $this->a_contract_list = isset($data['a_contract_list']) ? new ContractListGetResponseContractList((array)$data['a_contract_list']) : null;
        $this->is_contract_skip = isset($data['is_contract_skip']) ? (bool)$data['is_contract_skip'] : null;
    }
}
