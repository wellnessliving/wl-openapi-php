<?php

namespace WlSdk\Wl\Currency;

/**
 * Response from GET
 */
class BusinessCurrencyGetResponse
{
    /**
     * List of franchisees' currencies.
     *
     * @var int[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? (array)$data['a_list'] : null;
    }
}
