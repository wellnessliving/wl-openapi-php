<?php

namespace WlSdk\Wl\Shop\Product\Option\Inventory\Count;

use WlSdk\WlSdkClient;

/**
 * Returns information about product options.
 * Works in two modes: review and search.
 * In review mode, the method returns products with changed inventory quantities and notes.
 * In search mode, the method returns one product and its options (the result of searching by product barcode).
 */
class InventoryCount
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about product options.
Works in two modes: review and search.
In review mode, the method returns products with changed inventory quantities and notes.
In search mode, the method returns one product and its options (the result of searching by product barcode).
     *
     * Returns product option details including the current inventory quantity, last change date,
     * and notes. In barcode search mode, returns matching products; in review mode, returns only
     * options whose inventory or notes have been modified via the pending quantity or note maps.
     *
     * @return InventoryCountGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InventoryCountGetRequest $request): InventoryCountGetResponse
    {
        return new InventoryCountGetResponse($this->client->request('/Wl/Shop/Product/Option/Inventory/Count/InventoryCount.json', $request->params(), 'GET'));
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
