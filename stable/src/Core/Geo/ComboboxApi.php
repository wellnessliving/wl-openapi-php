<?php
namespace WlSdk\Core\Geo;

use WlSdk\WlSdkClient;

/**
 * Returns a list of cities to show in combobox list.
 */
class ComboboxApi
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
     * The locale ID used as a filter. The locale is generally a country.

One of the [LocaleSid](#/components/schemas/Core.Locale.LocaleSid) constants.

This will be `0` if all locations are searched.
     *
     * @var int|null
     */
    public ?int $id_locale = null;

    /**
     * The city name (or a fragment of the city name) used for the search.
     *
     * @var string|null
     */
    public ?string $s_value = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a list of cities to show in combobox list.
     *
     * Powers city autocomplete dropdowns in address forms. Returns up to 100 cities whose names start with
     * the given fragment, each labelled as "City, Region, Country". Pass a locale to restrict results to a
     * single country, or omit it to search worldwide.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_list: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Core/Geo/Combobox.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'id_locale' => $this->id_locale,
            's_value' => $this->s_value,
            ],
            static fn($v) => $v !== null
        );
    }
}
