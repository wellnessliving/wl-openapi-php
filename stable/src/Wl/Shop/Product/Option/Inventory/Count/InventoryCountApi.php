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
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * The list of notes for product options in the store.
Keys refer to product options in the store. Values refer to text notes.
     *
     * @var string[]|null
     */
    public ?array $a_note = null;

    /**
     * The list of product option quantities in the store.
Keys refer to product options in the store. Values refer to product counts.
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
     * @return array Parsed JSON response data.
     *   - array[] a_product_option: No description.
     *   - string text_user_name: The current username.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Shop/Product/Option/Inventory/Count/InventoryCount.json', $this->params(), 'GET');
    }

    /**
     * Saves changes of product inventory quantities and notes.
     *
     * Persists updated inventory counts and per-option notes for the specified product options.
     * Requires backend access with the store management privilege. Creates an inventory
     * transaction record for audit trail purposes.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Shop/Product/Option/Inventory/Count/InventoryCount.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_note' => $this->a_note,
            'a_quantity' => $this->a_quantity,
            'k_business' => $this->k_business,
            'text_barcode' => $this->text_barcode,
            ],
            static fn($v) => $v !== null
        );
    }
}
