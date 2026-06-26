<?php

namespace WlSdk\Wl\Business\Waiver;

/**
 * Response from GET
 */
class BusinessWaiverGetResponse
{
    /**
     * If `is_contract_minor` is set, this field contains the age
     * of the minor. Default value is 18.
     *
     * @var int|null
     */
    public ?int $i_contract_minor = null;

    /**
     * Require clients to agree to the Liability Release only when booking services. `True` means to require.
     * `False` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_contract_book_only = null;

    /**
     * Clients can sign the waiver on behalf of any minor of age `i_contract_minor`
     *
     * @var bool|null
     */
    public ?bool $is_contract_minor = null;

    /**
     * Require clients to agree to the Liability Release upon registration. `True` means to require. `False`
     * otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_contract_upon_register = null;

    /**
     * Contents of the business waiver.
     *
     * @var string|null
     */
    public ?string $xml_contract = null;

    /**
     * Description of the business waiver.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    public function __construct(array $data)
    {
        $this->i_contract_minor = isset($data['i_contract_minor']) ? (int)$data['i_contract_minor'] : null;
        $this->is_contract_book_only = isset($data['is_contract_book_only']) ? (bool)$data['is_contract_book_only'] : null;
        $this->is_contract_minor = isset($data['is_contract_minor']) ? (bool)$data['is_contract_minor'] : null;
        $this->is_contract_upon_register = isset($data['is_contract_upon_register']) ? (bool)$data['is_contract_upon_register'] : null;
        $this->xml_contract = isset($data['xml_contract']) ? (string)$data['xml_contract'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
    }
}
