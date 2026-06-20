<?php

namespace WlSdk\Wl\Book\Process\Store;

/**
 * Response from POST
 */
class StoreGroupPostResponse
{
    /**
     * No description.
     *
     * @var StoreGroupPostResponsePurchaseItemDistribute[]|null
     */
    public ?array $a_purchase_item_distribute = null;

    public function __construct(array $data)
    {
        $this->a_purchase_item_distribute = isset($data['a_purchase_item_distribute']) ? array_map(static fn ($item) => new StoreGroupPostResponsePurchaseItemDistribute((array)$item), (array)$data['a_purchase_item_distribute']) : null;
    }
}
