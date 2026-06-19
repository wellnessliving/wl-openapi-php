<?php
namespace WlSdk\Wl\Location;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of locations for the given business.
 */
class ListApi
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
     * A list of business keys.
You can specify this instead of `k_business` to load data for many businesses in one call.
     *
     * @var string[]|null
     */
    public ?array $a_business = null;

    /**
     * The business key used internally by WellnessLiving.

In case when passed regular or franchisee business returns only locations for requested business.
In case when passed franchisor business returns locations for all franchisees of this franchisor.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The primary keys of the selected businesses.
You can specify this instead of `k_business` to load data for many businesses in one call.

This is the same as `$a_business`, but serialized with JSON (to make the URL shorter).
     *
     * @var string|null
     */
    public ?string $s_business = null;

    /**
     * Determines whether removed locations should be returned.
     *
     * @var bool|null
     */
    public ?bool $show_remove = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of locations for the given business.
     *
     * Accepts a single business key, a JSON-encoded list of business keys, or an array of business keys, and
     * returns location details including coordinates, address, timezone, directories, and logo URLs. For
     * franchisor businesses, automatically expands to include all franchisee locations.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_location: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Location/List.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_business' => $this->a_business,
            'k_business' => $this->k_business,
            's_business' => $this->s_business,
            'show_remove' => $this->show_remove,
            ],
            static fn($v) => $v !== null
        );
    }
}
