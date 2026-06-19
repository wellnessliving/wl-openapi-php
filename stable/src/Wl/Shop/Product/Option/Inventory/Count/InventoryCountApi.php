<?php
namespace WlSdk\Wl\Shop\Product\Option\Inventory\Count;

use WlSdk\WlSdkClient;

/**
 * Returns information about product options.
 * Works in two modes: review and search.
 * In review mode, the method returns products with changed inventory quantities and notes.
 * In search mode, the method returns one product and its options (the result of searching by product barcode).
 */
class InventoryCountApi
{
    /**
     * The list of notes for product options in the store.
     * Keys refer to product options in the store. Values refer to text notes.
     *
     * @var string[]|null
     */
    public ?array $a_note = null;

    /**
     * The list of product option quantities in the store.
     * Keys refer to product options in the store. Values refer to product counts.
     *
     * @var int[]|null
     */
    public ?array $a_quantity = null;

    /**
     * The current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The product barcode, used for the search.
     *
     * @var string|null
     */
    public ?string $text_barcode = null;

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
     * @return InventoryCountApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): InventoryCountApiGetResponse
    {
        return new InventoryCountApiGetResponse($this->client->request('/Wl/Shop/Product/Option/Inventory/Count/InventoryCount.json', $this->params(), 'GET'));
    }

    /**
     * Saves changes of product inventory quantities and notes.
     *
     * Persists updated inventory counts and per-option notes for the specified product options.
     * Requires backend access with the store management privilege. Creates an inventory
     * transaction record for audit trail purposes.
     *
     * @return InventoryCountApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): InventoryCountApiPostResponse
    {
        return new InventoryCountApiPostResponse($this->client->request('/Wl/Shop/Product/Option/Inventory/Count/InventoryCount.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_note' => $this->a_note,
            'a_quantity' => $this->a_quantity,
            'k_business' => $this->k_business,
            'text_barcode' => $this->text_barcode,
            ],
            static fn($v) => $v !== null
        );
    }
}
