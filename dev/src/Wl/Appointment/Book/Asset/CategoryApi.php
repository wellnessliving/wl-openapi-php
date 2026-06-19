<?php
namespace WlSdk\Wl\Appointment\Book\Asset;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of information about asset categories for the appointment booking page.
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
     * If `true`, asset categories are loaded for backend mode. Otherwise, this will be `false` if asset categories
are loaded for frontend mode.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * `true` - search in all tabs.
`false` - search only for the selected book tab.
     *
     * @var bool|null
     */
    public ?bool $is_tab_all = null;

    /**
     * The class tab key to use for filtering services.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * The key of the location to show information for.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of information about asset categories for the appointment booking page.
     *
     * Returns all asset categories available at the given location, optionally filtered by book now tab.
     *  Each category includes its title and a flag indicating whether all its assets are hidden in
     *  the White Label mobile application. Supports both frontend and backend modes.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_category: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Appointment/Book/Asset/Category.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_backend' => $this->is_backend,
            'is_tab_all' => $this->is_tab_all,
            'k_class_tab' => $this->k_class_tab,
            'k_location' => $this->k_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
