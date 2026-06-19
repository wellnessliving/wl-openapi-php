<?php
namespace WlSdk\Wl\Profile\Contract;

/**
 * Response from GET
 */
class ContractApiGetResponse
{
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
        $this->html_contract = isset($data['html_contract']) ? (string)$data['html_contract'] : null;
        $this->i_minor_age = isset($data['i_minor_age']) ? (int)$data['i_minor_age'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
