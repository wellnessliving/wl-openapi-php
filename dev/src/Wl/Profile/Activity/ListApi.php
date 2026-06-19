<?php
namespace WlSdk\Wl\Profile\Activity;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of activity items to show in user profile.
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
     * Ending date of the date range. Optional.

This is local business timezone date. This day is included in the result.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Starting date of the date range. Optional.

 This is local business timezone date. This day is included in the result.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the client to show information for.
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
     * Retrieves a list of activity items to show in user profile.
     *
     * Returns the client's activity history for the specified business, filtered by an optional
     *  date range. Requires profile-view access and respects activity-type visibility rules for the
     *  requesting user.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_activity: An array listing client activities, where each activity is provided as an ID number.

The order of items in this array is the order in which the elements should be displayed.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Profile/Activity/List.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
