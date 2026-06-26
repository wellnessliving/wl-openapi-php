<?php

namespace WlSdk\Wl\Profile\Contract\ContractAll;

/**
 * Response from GET
 */
class ContractAllGetResponse
{
    /**
     * List of contacts. Every element has next keys:
     *
     * @var ContractAllGetResponseContract[]|null
     */
    public ?array $a_contract = null;

    public function __construct(array $data)
    {
        $this->a_contract = isset($data['a_contract']) ? array_map(static fn ($item) => new ContractAllGetResponseContract((array)$item), (array)$data['a_contract']) : null;
    }
}
