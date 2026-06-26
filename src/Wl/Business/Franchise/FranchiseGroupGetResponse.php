<?php

namespace WlSdk\Wl\Business\Franchise;

/**
 * Response from GET
 */
class FranchiseGroupGetResponse
{
    /**
     * Keys of businesses of franchise group. Primary keys in RsBusinessSql table.
     *
     * @var string[]|null
     */
    public ?array $a_business = null;

    public function __construct(array $data)
    {
        $this->a_business = isset($data['a_business']) ? (array)$data['a_business'] : null;
    }
}
