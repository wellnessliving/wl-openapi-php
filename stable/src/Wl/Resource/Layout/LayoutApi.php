<?php
namespace WlSdk\Wl\Resource\Layout;

use WlSdk\WlSdkClient;

/**
 * Returns information about the specified asset layout, including assets and custom shapes.
 */
class LayoutApi
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
     * The key of the layout.
     *
     * @var string|null
     */
    public ?string $k_resource_layout = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about the specified asset layout, including assets and custom shapes.
     *
     * Returns the full layout configuration including the asset list with positions and images, custom shapes with
     * coordinates and colors, and display settings such as grid dimensions and number visibility.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_resource: No description.
     *   - array[] a_shape_custom: No description.
     *   - array[] a_shape_icon: No description.
     *   - int i_grid: The grid size.
     *   - bool is_grid: This will be `true` if snap to grid is enabled. Otherwise, this will be `false`.
     *   - string k_resource_type: The key of the asset category.
     *   - string s_color_active: The color for active assets. Hex encoding with prefix `#`.
     *   - bool show_name: This will be `true` if asset names are displayed. Otherwise, this will be `false`.
     *   - bool show_number: This will be `true` if asset numbers are displayed. Otherwise, this will be `false`.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Resource/Layout/Layout.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_resource_layout' => $this->k_resource_layout,
            ],
            static fn($v) => $v !== null
        );
    }
}
