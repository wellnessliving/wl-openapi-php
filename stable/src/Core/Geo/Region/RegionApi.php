<?php
namespace WlSdk\Core\Geo\Region;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about countries and regions.
 */
class RegionApi
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
     * The locale ID to find regions for. One of the [LocaleSid](#/components/schemas/Core.Locale.LocaleSid) constants.
     *
     * @var int|null
     */
    public ?int $id_locale = null;

    /**
     * Determines whether to get regions for all locales.

If `true`, this will get regions for all locales. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_locale_all = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about countries and regions.
     *
     * Populates country and region dropdowns in address forms. Returns one or all countries together with
     * their subordinate regions (states, provinces, territories). Pass a locale to get only the country
     * relevant to a given market, or set `$is_locale_all` to retrieve the full list for multi-country UIs.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_region: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Core/Geo/Region/Region.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'id_locale' => $this->id_locale,
            'is_locale_all' => $this->is_locale_all,
            ],
            static fn($v) => $v !== null
        );
    }
}
