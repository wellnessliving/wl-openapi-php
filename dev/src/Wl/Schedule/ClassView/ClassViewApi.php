<?php
namespace WlSdk\Wl\Schedule\ClassView;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about class.
 */
class ClassViewApi
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
     * A list of sessions to get information for. Every element has the following keys:


`null` if requesting a single session.
     *
     * @var array[]|null
     */
    public ?array $a_session_request = null;

    /**
     * The date/time of the session.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Key of the business in which the action is performed.

`null` if key of the business was not passed.

Key of the business is required if [ClassViewApi](/Wl/Schedule/ClassView/ClassView.json) was passed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * A list of sessions to get information for.
A serialized array. See `a_session_request` for the array structure.
Serialization and sending by POST is necessary to send big lists.
     *
     * @var string|null
     */
    public ?string $s_session_request = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about class.
     *
     * Returns detailed information about one or more class sessions, including staff, location,
     * assigned assets, virtual location links, visit counts, and booking availability. Supports
     * single-session mode for one class period or multi-session mode for batch lookups.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_asset: No description.
     *   - array[] a_class: No description.
     *   - array[] a_location: No description.
     *   - array[] a_session_result: No description.
     *   - array[] a_staff: No description.
     *   - string[] a_virtual_location: List of other locations where virtual class can be booked.
Empty array if class isn't virtual or can't be booked in other locations.
     *   - array[] a_visits_required: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Schedule/ClassView/ClassView.json', $this->params(), 'GET');
    }

    /**
     * Retrieves information about classes.
     *
     * A POST-method alternative to `get()` for multi-session batch lookups
     * where the session list is too long to encode in a GET query string. The session list is
     * provided as a JSON-encoded string in the request body.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_asset: No description.
     *   - array[] a_class: No description.
     *   - array[] a_location: No description.
     *   - array[] a_session_result: No description.
     *   - array[] a_staff: No description.
     *   - string[] a_virtual_location: List of other locations where virtual class can be booked.
Empty array if class isn't virtual or can't be booked in other locations.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Schedule/ClassView/ClassView.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_session_request' => $this->a_session_request,
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'uid' => $this->uid,
            's_session_request' => $this->s_session_request,
            ],
            static fn($v) => $v !== null
        );
    }
}
