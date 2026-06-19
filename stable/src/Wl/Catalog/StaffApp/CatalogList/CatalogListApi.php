<?php
namespace WlSdk\Wl\Catalog\StaffApp\CatalogList;

use WlSdk\WlSdkClient;

/**
 * Returns all sale items available in the business for staff, optionally filtered by location and visit.
 */
class CatalogListApi
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
     * The key of the business to get categories for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key.
This can affect the list of displayed products.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The visit key to pay for.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns all sale items available in the business for staff, optionally filtered by location and visit.
     *
     * Used in the staff app to populate the add-item picker during checkout. Returns the products and
     * services the staff member is allowed to sell at the current location. When a visit key is provided,
     * the list is filtered to items that are relevant to that visit.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_shop_product: No description.
     *   - bool can_add: If `true`, the current user is able to add the purchased item to the account.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Catalog/StaffApp/CatalogList/CatalogList.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_visit' => $this->k_visit,
            ],
            static fn($v) => $v !== null
        );
    }
}
