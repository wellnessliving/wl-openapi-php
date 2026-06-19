<?php
namespace WlSdk\Wl\Appointment\Book\Product;

use WlSdk\WlSdkClient;

/**
 * Retrieves list of available service add-ons.
 */
class ProductApi
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
     * The key of a service to show information for.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves list of available service add-ons.
     *
     * Returns all active add-on products available for the specified service, including title, image,
     *  price, and quantity information. Results are not filtered by client type; use
     * [Product62Api](/Wl/Appointment/Book/Product/Product62.json)
     *  when filtering by client login type is required.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_product: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Product/Product.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_service' => $this->k_service,
            ],
            static fn($v) => $v !== null
        );
    }
}
