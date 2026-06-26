<?php

namespace WlSdk\Wl\Purchase\Pool;

/**
 * Response from GET
 */
class PoolItemGetResponse
{
    /**
     * Key of the active purchase pool, if it's found.
     *
     * In theory, can be multiple pools for the same item, one random pool will be returned in this case.
     *
     * @var string|null
     */
    public ?string $k_purchase_pool = null;

    public function __construct(array $data)
    {
        $this->k_purchase_pool = isset($data['k_purchase_pool']) ? (string)$data['k_purchase_pool'] : null;
    }
}
