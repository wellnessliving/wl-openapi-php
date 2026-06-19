<?php
namespace WlSdk\Wl\Schedule\Page;

use WlSdk\WlSdkClient;

/**
 * Retrieves items of schedule for the client.
 */
class PageListApi
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
     * If the date is set, a list of services before this date will be returned.
The date and time is in UTC and in MySQL format.
If left as `null`, then a list of services that aren't limited to the end date will be returned.
     *
     * @var string|null
     */
    public ?string $dtu_end = null;

    /**
     * If the date is set, a list of services after this date will be returned.
The date and time is in UTC and in MySQL format.
If left as `null`, then a list of services that aren't limited to the start date will be returned.
     *
     * @var string|null
     */
    public ?string $dtu_start = null;

    /**
     * If `true`, then all the client previous visits will be retrieved.
If `false` or left as `null`, then all the client upcoming visits will be retrieved.
     *
     * @var bool|null
     */
    public ?bool $is_past = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves items of schedule for the client.
     *
     * Returns the client's upcoming or past visits for a given business, ordered by date. Supports
     * optional date range boundaries to retrieve visits within a specific window. Used to populate
     * the schedule history and upcoming bookings pages in the client portal.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_visit: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Schedule/Page/PageList.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dtu_end' => $this->dtu_end,
            'dtu_start' => $this->dtu_start,
            'is_past' => $this->is_past,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
