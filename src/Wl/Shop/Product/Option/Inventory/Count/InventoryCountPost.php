<?php
namespace WlSdk\Wl\Shop\Product\Option\Inventory\Count;

use WlSdk\WlSdkClient;

/**
 * Saves changes of product inventory quantities and notes.
 */
class InventoryCountPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves changes of product inventory quantities and notes.
     *
     * Persists updated inventory counts and per-option notes for the specified product options.
     * Requires backend access with the store management privilege. Creates an inventory
     * transaction record for audit trail purposes.
     *
     * @return InventoryCountPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(InventoryCountPostRequest $request): InventoryCountPostResponse
    {
        return new InventoryCountPostResponse($this->client->request('/Wl/Shop/Product/Option/Inventory/Count/InventoryCount.json', $request->params(), 'POST'));
    }
}
