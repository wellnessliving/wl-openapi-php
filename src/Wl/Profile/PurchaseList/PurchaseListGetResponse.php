<?php

namespace WlSdk\Wl\Profile\PurchaseList;

/**
 * Response from GET
 */
class PurchaseListGetResponse
{
    /**
     * A list of purchased items. Every element contains a sub-array with the following fields:
     *
     * @var PurchaseListGetResponsePurchase[]|null
     */
    public ?array $a_purchase = null;

    public function __construct(array $data)
    {
        $this->a_purchase = isset($data['a_purchase']) ? array_map(static fn ($item) => new PurchaseListGetResponsePurchase((array)$item), (array)$data['a_purchase']) : null;
    }
}
