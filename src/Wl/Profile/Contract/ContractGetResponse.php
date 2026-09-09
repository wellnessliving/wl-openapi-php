<?php

namespace WlSdk\Wl\Profile\Contract;

/**
 * Response from GET
 */
class ContractGetResponse
{
    /**
     * List of contracts required at once, if the purchase option requires agreement to several
     *  distinct contracts (for example, one per Tuition visitor). Keyed the same way as
     *  `a_signature` used to submit signatures for such a purchase option. Empty if the purchase
     *  option requires at most one contract - use {@link
     * \WlSdk\Wl\Profile\Contract\ContractGetResponse::$html_contract} instead in
     *  that case. Value has the following structure:
     *
     * @var ContractGetResponseContractList|null
     */
    public ?ContractGetResponseContractList $a_contract_list = null;

    /**
     * The text of the contract.
     *
     * @var string|null
     */
    public ?string $html_contract = null;

    /**
     * Age of minor which documents can be signed by parent or legal guardian.
     *
     * @var int|null
     */
    public ?int $i_minor_age = null;

    /**
     * Title of purchase option.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_contract_list = isset($data['a_contract_list']) ? new ContractGetResponseContractList((array)$data['a_contract_list']) : null;
        $this->html_contract = isset($data['html_contract']) ? (string)$data['html_contract'] : null;
        $this->i_minor_age = isset($data['i_minor_age']) ? (int)$data['i_minor_age'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
