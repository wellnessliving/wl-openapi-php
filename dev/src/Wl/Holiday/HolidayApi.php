<?php
namespace WlSdk\Wl\Holiday;

use WlSdk\WlSdkClient;

/**
 * Returns information about holiday day of business/locations.
 */
class HolidayApi
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
     * The date working hours are required for.
Set in the business's timezone.
     *
     * @var string|null
     */
    public ?string $dl_work = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information about holiday day of business/locations.
     *
     * For the specified business and date, returns whether that date is a business-wide closed day, the closed day
     * title if applicable, and a map of location keys to their closed day titles for any locations also closed on
     * that date.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_location_holiday: A list of the location's closed day titles by location keys on the date `dl_work`.

Keys are location keys. Values are holiday title strings.
     *   - bool is_business_holiday: `true` if the business has a closed day on the date `dl_work`, `false` if otherwise.
     *   - string text_business_title: The message used for the business's closed day on the date `dl_work`.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Holiday/Holiday.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dl_work' => $this->dl_work,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
