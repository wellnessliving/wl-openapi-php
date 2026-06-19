<?php
namespace WlSdk\Wl\Event\Book\EventList;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of events.
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
     * Defines how the event availability flag filter should be applied.

One of [AFlagSid](#/components/schemas/AFlagSid) constants.

* [AFlagSid::ON](#/components/schemas/AFlagSid) to show only available events.
* [AFlagSid::OFF](#/components/schemas/AFlagSid) to show only unavailable events.
* [AFlagSid::ALL](#/components/schemas/AFlagSid) to show all events (available and unavailable).
     *
     * @var int|null
     */
    public ?int $id_status = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the category tab.
If empty, select only elements with not specified book tab.
     *
     * @var string|null
     */
    public ?string $k_class_tab = null;

    /**
     * The user's key.
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
     * Retrieves a list of events.
     *
     * Used to populate the events tab on the client-facing booking page. Returns all events offered in
     * the business (or filtered to a specific tab), together with availability flags so the UI can
     * show which events still have open spots.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_event: A list of event identifiers.

The order of items in this array matches the order in which elements should be displayed.
     *   - bool[] a_event_available: Event availability map.

Unavailable events are those that cannot be booked,
 but they can be shown to the client (for example, under the "not available" filter).

Key is the event class key. 
Value is `true` if the event is available for booking, `false` if it is unavailable.
     *   - bool is_virtual_service: `true` if exist at least one virtual event
by specific `k_business` and
`k_class_tab`,
`false` otherwise.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Event/Book/EventList/List.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'id_status' => $this->id_status,
            'k_business' => $this->k_business,
            'k_class_tab' => $this->k_class_tab,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
