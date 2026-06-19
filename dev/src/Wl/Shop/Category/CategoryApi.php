<?php
namespace WlSdk\Wl\Shop\Category;

use WlSdk\WlSdkClient;

/**
 * Returns the list of shop categories available for the given business.
 */
class CategoryApi
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
     * The key of the business to get shop categories for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Title of new category.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the list of shop categories available for the given business.
     *
     * Returns all store categories that the current user is allowed to access, including their
     * titles, descriptions, and display order. Guest and client users see only public categories;
     * staff and admin users may see additional categories based on their access level.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_shop_category: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Shop/Category/Category.json', $this->params(), 'GET');
    }

    /**
     * Creates new shop category.
     *
     * Creates a new product category in the business store with the given title. Requires
     * backend access with the appropriate store management privilege.
     *
     * @return array Parsed JSON response data.
     *   - string k_shop_category: Key of the created shop category.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Shop/Category/Category.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'text_title' => $this->text_title,
            ],
            static fn($v) => $v !== null
        );
    }
}
