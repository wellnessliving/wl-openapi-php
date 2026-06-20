<?php

namespace WlSdk\Wl\Book\Process\Purchase;

/**
 * Response from GET
 */
class PurchaseElementListGetResponse
{
    /**
     * Detailed information about the amounts for the purchase item list.
     * Every element has the next keys:
     *
     * @var PurchaseElementListGetResponsePurchaseItemResult[]|null
     */
    public ?array $a_purchase_item_result = null;

    public function __construct(array $data)
    {
        $this->a_purchase_item_result = isset($data['a_purchase_item_result']) ? array_map(static fn ($item) => new PurchaseElementListGetResponsePurchaseItemResult((array)$item), (array)$data['a_purchase_item_result']) : null;
    }
}
