<?php
namespace WlSdk\Wl\Location;

use WlSdk\WlSdkClient;

/**
 * Gets location lists for a bulk of businesses.
 */
class ListBulkApi
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
     * The ID of the directory if locations should be filtered by enabling directory integration.

`0` if a directory filter isn't required.
     *
     * @var int|null
     */
    public ?int $id_directory = null;

    /**
     * A list of businesses. Business primary keys are serialized with JSON.

Empty string if you need all locations in the system.
     *
     * @var string|null
     */
    public ?string $s_business = null;

    /**
     * A list of locations. Location primary keys are serialized with JSON.
     *
     * @var string|null
     */
    public ?string $s_location = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets location lists for a bulk of businesses.
     *
     * Accepts a JSON-encoded list of business keys, a JSON-encoded list of location keys, or both, and returns
     * short-form location data alongside full location detail objects. Optionally filters results to only
     * locations that have a specific directory integration enabled.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_location: No description.
     *   - array[] a_location_full: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Location/ListBulk.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'id_directory' => $this->id_directory,
            's_business' => $this->s_business,
            's_location' => $this->s_location,
            ],
            static fn($v) => $v !== null
        );
    }
}
