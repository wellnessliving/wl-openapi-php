<?php
namespace WlSdk\Wl\Book\Process\Purchase;

/**
 * Response from GET
 */
class PurchaseElementListGetResponse
{
    /**
     * No description.
     *
     * @var PurchaseElementListGetResponsePurchaseItemResult[]|null
     */
    public ?array $a_purchase_item_result = null;

    public function __construct(array $data)
    {
        $this->a_purchase_item_result = isset($data['a_purchase_item_result']) ? array_map(static fn($item) => new PurchaseElementListGetResponsePurchaseItemResult((array)$item), (array)$data['a_purchase_item_result']) : null;
    }
}
