<?php

namespace WlSdk\Wl\Profile\Contract;

class ContractGetResponseContractList
{
    /**
     * The text of this specific contract.
     *
     * @var string|null
     */
    public ?string $html_contract = null;

    /**
     * Key of the visitor this contract applies to. Primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->html_contract = isset($data['html_contract']) ? (string)$data['html_contract'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
