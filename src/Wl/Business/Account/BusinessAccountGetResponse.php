<?php
namespace WlSdk\Wl\Business\Account;

/**
 * Response from GET
 */
class BusinessAccountGetResponse
{
    /**
     * A list of business keys.
     *
     * @var string[]|null
     */
    public ?array $a_business_keys = null;

    public function __construct(array $data)
    {
        $this->a_business_keys = isset($data['a_business_keys']) ? (array)$data['a_business_keys'] : null;
    }
}
